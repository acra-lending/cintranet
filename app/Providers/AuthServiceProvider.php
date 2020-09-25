<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate for editing users
        Gate::define('manage-users', function($user){
            return $user->hasRole('super admin');
        });
        Gate::define('edit-users', function($user){
            return $user->hasAnyRoles(['super admin', 'admin']);
        });
        Gate::define('delete-users', function($user){
            return $user->hasRole('super admin');
        });

        // Gate for editing posts
        Gate::define('manage-posts', function($user){
            return $user->hasAnyRoles(['super admin', 'author']);
        });
        Gate::define('edit-posts', function($user){
            return $user->hasAnyRoles(['super admin', 'admin', 'author']);
        });
        Gate::define('delete-posts', function($user){
		return $user->hasAnyRoles(['super admin', 'author']);
        });
    }
}
