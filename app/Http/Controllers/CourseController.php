<?php

namespace App\Http\Controllers;
use App\Department;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Department $department)
    {
        return view('admin.courses.index', compact('department'));
    }

    public function store(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $department->courses()->create($request->all());

        return redirect()->route('departments.courses.index', $department)
                        ->with('success','Course created successfully.');
    }
}
