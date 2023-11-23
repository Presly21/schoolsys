<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbaordController extends Controller
{
    public function dashboard(){
        return view ('admin.dashbaord');
    }
    public function userList(){
        return view ('admin.users.index');
    }
    public function add(){
        return view ('admin.roles.index');
    }
}
