<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function showDashboard()
    {
        return view ('teacher.dashboard');
    }
}
