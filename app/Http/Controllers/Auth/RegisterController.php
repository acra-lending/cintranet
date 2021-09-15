<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Role;
use DB;
use App\Submissions;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $role = Role::where('name', 'admin')->first();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $firstname = explode(' ', trim($data['name']))[0];
        $lastname = explode(' ', trim($data['name']))[1];
        $directPhone = $data['directPhone'];
        $ext = $data['ext'];
        $cellPhone = $data['cellPhone'];
        $departments = $data['departments'];
        $id = $user->id;


        $info = DB::table('s2zar_jsn_users')->insert([
            'id'            => $id,
            'firstname'     => $firstname,
            'lastname'      => $lastname,
            'directphone'   => $directPhone,
            'extension'     => $ext,
            'cell'          => $cellPhone,
            'departments'   => $departments
        ]);

        

        // $info2 = DB::table('submissions')->insert([
        //     'ae_name'   =>$data['name'],
        //     'user_id'   =>$user->id
        // ]);
        // dd($info2);
        
        $user->assignRole($role);

        return $user;
    }
}
