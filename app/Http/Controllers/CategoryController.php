<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::latest()->paginate(5);
        return view('admin.categories.index',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required'
        ]);

        Category::create($request->all());
        return redirect()->route('categories.index')
                        ->with('success','Category added successfully.');
    }
}
