<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
Use Aacotroneo\Saml2\Events\Saml2LoginEvent;
use App\User;
use App\Role;
use DB;
use Auth;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'Illuminate\Auth\Events\Login' => [
            'App\Listeners\LogSuccessfulLogin',
        ],
        'auth.login' => [
            LogSuccessfulLogin::class,
        ],
    ];


    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        // parent::boot();

        Event::listen('Aacotroneo\Saml2\Events\Saml2LoginEvent', function (Saml2LoginEvent $event) {
            $messageId = $event->getSaml2Auth()->getLastMessageId();
            // Add your own code preventing reuse of a $messageId to stop replay attacks
        
            $user = $event->getSaml2User();
            $userData = [
                'id' => $user->getUserId(),
                'attributes' => $user->getAttributes(),
                'assertion' => $user->getRawSamlAssertion()
            ];

                //find user by ID or attribute
                $laravelUser = User::where('email', $userData['id'])->first();

                if ($laravelUser) {
                    // login user
                    // dd($userData);
                    Auth::login($laravelUser, true);
                } else { //if it does not exist create it and go on or show an error message
                    // create user
                    $firstname = $userData['attributes']['First Name'][0];
                    $lastname = $userData['attributes']['Last Name'][0];
                    $email = $userData['attributes']['Email'][0];
                    $position = $userData['attributes']['Position'][0];
                    $departments = $userData['attributes']['Department'][0];
                    $directPhone = $userData['attributes']['Phone Number'][0];
                    $ext = $userData['attributes']['Extension'][0];

                    $role = Role::where('name', 'user')->first();

                    $nameArray = array($firstname, $lastname);
                    $name = implode(' ', $nameArray);

                    $user = User::create([
                        'name' => $name,
                        'email' => $email,
                    ]);

                    $id = $user->id;

                    $info = DB::table('s2zar_jsn_users')->insert([
                        'id'            => $id,
                        'firstname'     => $firstname,
                        'lastname'      => $lastname,
                        'directphone'   => $directPhone,
                        'extension'     => $ext,
                        // 'cell'          => $cellPhone,
                        'departments'   => $departments
                    ]);

                    $user->assignRole($role);

                    Auth::login($user, true);

                }
        });

        Event::listen('Aacotroneo\Saml2\Events\Saml2LogoutEvent', function (Saml2LogoutEvent $event) {
            Auth::logout();
            Session::save();
        });
    }
}
