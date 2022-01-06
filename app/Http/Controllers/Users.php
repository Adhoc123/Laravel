<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($user,$age)
    {
        print $user.' '.$age.' ';

        return['user'=>$user,'age'=>$age];
    }
}
