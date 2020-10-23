<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\account;

class AccountController extends Controller
{
    public function index(){
        $get_account=account::all();
        return view('get.account',compact('get_account'));
    }
}
