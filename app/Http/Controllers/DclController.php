<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DclController extends Controller
{
    public function showDevelopmentalChecklist()
    {
        return view('teacher.developmentalchecklist');
    }
}
