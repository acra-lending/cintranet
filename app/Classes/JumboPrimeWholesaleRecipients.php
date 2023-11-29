<?php

namespace App\Classes;

use App\User;
use DB;

class JumboPrimeWholesaleRecipients 
{
    public function __construct()
    {
        return "construct function was initialized.";
    }

    public function getCompanyUsers()
    {
        $users = User::all()->pluck('email')->toArray();

        return $users;
    }

    // public function getBrokers()
    // {
    //     $wp_users_with_meta = DB::connection('mysql2')->table('wp_9c4654a05b_users')
    //     ->join('wp_9c4654a05b_usermeta', 'wp_9c4654a05b_usermeta.user_id', 'wp_9c4654a05b_users.ID')
    //     ->select('user_email', 'meta_value')
    //     ->where('meta_value', 'a:1:{s:9:"um_broker";b:1;}')
    //     ->get();

    //     $wp_brokers = [];
    //     foreach ($wp_users_with_meta as $users) {
    //             $wp_brokers[] = $users->user_email;
    //     }

    //     return $wp_brokers;

    // }
}