<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userData(){
        $users = User::all();
        $phones = Phone::all();
        return view("welcome",compact("users","phones"));
    }
}
