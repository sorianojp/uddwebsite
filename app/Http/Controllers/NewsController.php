<?php

namespace App\Http\Controllers;
use App\News;
use App\Event;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['allnews', 'show']);
    }

    public function index()
    {
        $news = News::all();
        return view('admin.news.index',compact('news'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function allnews()
    {
        $events = Event::inRandomOrder()->get();
        $news = News::orderBy('created_at', 'desc')->get();
        return view('allnews',compact('news', 'events'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.news.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        $input = $request->all();

        try {
            if ($image = $request->file('image')) {
                $destinationPath = public_path('image'); // Use public_path to get the full path
                $coverImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $coverImage);
                $input['image'] = $coverImage; // Save only the filename in the database
            }

            Auth::user()->news()->create($input);

            return redirect()->route('news.index')->with('success', 'Created Successfully');
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('File upload error: ' . $e->getMessage());

            // Redirect back with error message
            return redirect()->back()->withErrors(['msg' => 'Error uploading the image: ' . $e->getMessage()]);
        }
    }


    public function show(News $news)
    {
        return view ('admin.news.show', compact('news'));
    }

    public function unfeaturenews(News $news)
    {
        $news->featured = '0';
        $news->save();

        return redirect()->route('news.index');
    }

    public function featurenews(News $news)
    {
        $news->featured = '1';
        $news->save();

        return redirect()->route('news.index');
    }

}
