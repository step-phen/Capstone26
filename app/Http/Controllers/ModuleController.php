<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class moduleController extends Controller
{
    public function module()
    {
        return view ('teacher.module');
    }
}
