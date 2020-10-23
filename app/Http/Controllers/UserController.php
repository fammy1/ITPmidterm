<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index(){
        $get=User::all();
        return view('get.user',compact('get'));
    }
}
