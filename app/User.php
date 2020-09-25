<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use App\Notifications\MailResetPasswordNotification;
use Kyslik\ColumnSortable\Sortable;


class User extends Authenticatable
{
    use Notifiable, Sortable;

    // public $sortable = [ 'name', 'email', 'created_at', 'lastvisitDate' ];

    protected $table ='s2zar_users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'roles' => 'string',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasAnyRoles($roles)
    {
        if($this->roles()->whereIn('name', $roles)->first()){
            return true;
        }
        
        return false;
    }

    public function hasRole($role)
    {
        if($this->roles()->where('name', $role)->first()){
            return true;
        }
        
        return false;
    }

    public function assignRole(Role $role)
    {
        return $this->roles()->save($role);
    }

    public function posts()
    {
        return $this->hasMany('App\LearningPost');
    }

    public function announcements()
    {
        return $this->hasMany('App\Announcement');
    }

    public function announcementFiles()
    {
        return $this->hasMany('App\announcementFile');
    }


    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    // public function sendPasswordResetNotification($token)
    // {
    //     $this->notify(new MailResetPasswordNotification($token));
    // }

}
