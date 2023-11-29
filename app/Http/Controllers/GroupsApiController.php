<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Resources\SCIM\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\User;
use App\Role;
use DB;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;
use Log;


class GroupsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Implementation not finished

        $filter = $request->get('filter');
        if ($filter && preg_match('/userName eq (.*)/i', $filter, $matches)) {
            $email = str_replace('"', '', $matches[1]);
            $users = User::where('email', $email)->get();
        } else {
            $users = User::paginate(15);
        }

        $users = $users->map(function ($user) {
            return [
                'id'    => $user->id,
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
        ];

        if ($users->count()) {
            $return['Resources'] = $users;
        }
        return response()->json($return)->setStatusCode(Response::HTTP_OK);

    }
}
