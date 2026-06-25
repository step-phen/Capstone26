<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learners;

class UsersController extends Controller
{
    public function showDashboard()
    {
        $totalLearners = Learners::count();
        return view('teacher.dashboard', compact('totalLearners'));
    }
}
