<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Resources\SCIM\UserResource;
use Illuminate\Http\Request;
// use Illuminate\Support\Arr;
use App\User;
use App\Role;
use DB;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;
use Log;

class UsersApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = $request->get('filter');
        if ($filter && preg_match('/userName eq (.*)/i', $filter, $matches)) {
            $email = str_replace('"', '', $matches[1]);
            $users = User::where('email', $email)->get();
        } else {
            $users = User::paginate(15);
        }

        $count = $request->get('count');
        $startIndex = $request->get('startIndex');
        $itemsPerPage = $users->count();

        $users = $users->map(function ($user) {
            return [
                'id'    => $user->email,
                'name' => [
                    'familyName' => explode(' ', trim($user->name))[1],
                    'givenName' => explode(' ', trim($user->name))[0],
                ],
                'userName' => $user->email,
                'active'    => $user->active,
                'emails' => array([
                    'value' => $user->email
                ])
            ];
        });

        $return = [
            'schemas' => ['urn:ietf:params:scim:api:messages:2.0:ListResponse'],
            'totalResults' => $users->count(),
            'count' => $count,
            'startIndex' => $startIndex,
            'itemsPerPage' => $itemsPerPage
        ];

        if ($users->count()) {
            $return['Resources'] = $users;
        }
        return response()->json($return)->setStatusCode(Response::HTTP_OK);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if (User::where('email', $data['emails'][0]['value'])->exists()) {
            return $this->scimError('User already exists', Response::HTTP_CONFLICT);
        } else {
    
            $firstname = $data['name']['givenName'];
            $lastname = $data['name']['familyName'];
            $email = $data['emails'][0]['value'];
            $active = intval($data['active']);
            $departments = $data['urn:ietf:params:scim:schemas:extension:enterprise:2.0:User']['department'];
            $team = $data['urn:ietf:params:scim:schemas:extension:enterprise:2.0:User']['manager']['displayName'];
            $position = $data['title'];
            $departments = $data['urn:ietf:params:scim:schemas:extension:enterprise:2.0:User']['department'];
            $mobilePhone = $data['urn:ietf:params:scim:schemas:extension:enterprise:2.0:User']['mobilePhone'];
            $directPhone = $data['phoneNumbers'][0]['value'];
            $ext = $data['urn:ietf:params:scim:schemas:extension:enterprise:2.0:User']['extension'];
    
            // $role = Role::where('id', $data['urn:ietf:params:scim:schemas:extension:enterprise:2.0:User']['roles'])->first();
            $role = Role::where('name', 'user')->first();
    
    
            $nameArray = array($firstname, $lastname);
            $name = implode(' ', $nameArray);
    
            $user = User::create([
                'name' => $name,
                'username' => $email,
                'email' => $email,
                'active' => $active,
                'password' => Hash::make('password'),
            ]);          
    
            $id = $user->id;
    
            $info = DB::table('s2zar_jsn_users')->insert([
                'id'            => $id,
                'firstname'     => $firstname,
                'lastname'      => $lastname,
                'directphone'   => $directPhone,
                'extension'     => $ext,
                'cell'          => $mobilePhone,
                'departments'   => $departments,
                'position'      => $position,
                'team'          => $team,
            ]);
    
            $user->assignRole($role);
    
            return UserResource::make($user)
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, string $id)
    {
        try {
            $user = User::where('email', $id)->firstOrFail();
        } catch (\Exception $exception) {
            return $this->scimError('User does not exist', Response::HTTP_NOT_FOUND);
        }
        return UserResource::make($user)
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function replace(Request $request, string $id)
    {
        $data = $request->all();

        if (!User::where('email', $id)->first()) {
            return $this->scimError('User does not exist', Response::HTTP_NOT_FOUND);
        } else {

            $firstname = $data['name']['givenName'];
            $lastname = $data['name']['familyName'];
            $email = $data['emails'][0]['value'];
            $active = intval($data['active']);
            $position = $data['title'];
            $departments = $data['urn:ietf:params:scim:schemas:extension:enterprise:2.0:User']['department'];
            $team = $data['urn:ietf:params:scim:schemas:extension:enterprise:2.0:User']['manager']['displayName'];
            $directPhone = $data['phoneNumbers'][0]['value'];
            $mobilePhone = $data['urn:ietf:params:scim:schemas:extension:enterprise:2.0:User']['mobilePhone'];
            $ext = $data['urn:ietf:params:scim:schemas:extension:enterprise:2.0:User']['extension'];
    
            // $role = Role::where('id', $data['urn:ietf:params:scim:schemas:extension:enterprise:2.0:User']['roles'])->first();
            // $role = Role::where('name', 'user')->first();
    
            $nameArray = array($firstname, $lastname);
            $name = implode(' ', $nameArray);
    
            $user = User::where('email', $id)->firstOrFail()
                ->update([
                    'name' => $name,
                    'username' => $email,
                    'email' => $email,
                    'active' => $active
                ]);

            $user = User::where('email', $id)->first();

            $info = DB::table('s2zar_jsn_users')->where('id', $user->id)->update([
                'id'            => $user->id,
                'firstname'     => $firstname,
                'lastname'      => $lastname,
                'directphone'   => $directPhone,
                'extension'     => $ext,
                'cell'          => $mobilePhone,
                'position'      => $position,
                'departments'   => $departments,
                'team'          => $team,
            ]);

            // $user->roles()->sync($role);
    
            return UserResource::make($user)
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
        }

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        return $this->updateUser($request, $id);
    }
    
    private function updateUser($request, string $id)
    {
        $user = User::where('email', $id)->firstOrFail();


        $validatedData = $request->all();
        // $active = Arr::get($validatedData, 'Operations', null);
        $active = $validatedData['Operations'][0]['value']['active'];

        // We only care about updating the user's secure access on activation,
        // so return early if there's been no change to their active status
        if ($active === null) {
            return UserResource::make($user)
                ->response()
                ->setStatusCode(Response::HTTP_OK);
        }

        $user->active = $active;


        // If user is active, ensure secure access permission
//        if ($user->active && !$user->hasAccess('secure.access')) {
//            $user->updatePermission('secure.access', true, true);
//        }

        if ($user->isDirty()) {
            $user->save();
        }

        if ($active === false) {
            $user->roles()->detach();
            DB::table('s2zar_jsn_users')->where('id', $user->id)->delete();
            $user->delete();
        }

        if ($active === true) {
            return UserResource::make($user)
            ->response()
            ->setStatusCode(Response::HTTP_OK);
        }

        return UserResource::make($user)
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

     /**
     * Returns a SCIM-formatted error message
     *
     * @param string|null $message
     * @param int $statusCode
     *
     * @return JsonResponse
     */
    protected function scimError(?string $message, int $statusCode): JsonResponse
    {
        return response()
            ->json([
                'schemas' => ["urn:ietf:params:scim:api:messages:2.0:Error"],
                'detail' => $message ?? 'An error occured',
                'status' => $statusCode,
            ])->setStatusCode($statusCode);
    }
}
