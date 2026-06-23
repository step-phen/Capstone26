<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnersController extends Controller
{
    public function learners()
    {
        return view ('teacher.learner');
    }
}
