<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learners;

class LearnersController extends Controller
{
    public function learners()
    {
        $learners = Learners::all();
        return view('teacher.page.learner', compact('learners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:100',
            'age'    => 'required|integer|min:1|max:100',
            'gender' => 'required|in:Male,Female',
        ]);

        Learners::create($request->only('name', 'age', 'gender'));

        return redirect()->route('teacher.learners')
            ->with('success', 'Learner added successfully.');
    }

    public function show($id)
    {
        $learner = Learners::findOrFail($id);
        return view('teacher.learner-profile', compact('learner'));
    }

    public function progress($id)
    {
        $learner = Learners::findOrFail($id);
        return view('teacher.learner-progress', compact('learner'));
    }
}
