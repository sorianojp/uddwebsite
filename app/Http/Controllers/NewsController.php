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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();


        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $coverImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $coverImage);
            $input['image'] = "$coverImage";
        }

        Auth::user()->news()->create($input);

        return redirect()->route('news.index')->with('success', 'Created Succesfully');
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
