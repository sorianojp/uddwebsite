<?php

namespace App\Http\Controllers;
use App\News;
use App\Event;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image; // Add this import

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

        if ($image = $request->file('image')) {
            // Specify the destination path
            $destinationPath = 'image/';
            $coverImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $filePath = $destinationPath . $coverImage;

            // Resize image if it's too large
            $maxWidth = 1024; // Define max width
            $maxHeight = 768; // Define max height
            $maxFileSize = 5120; // Max file size in kilobytes (5MB)

            // Create an instance of the image
            $img = Image::make($image);

            // Check the file size
            if ($image->getSize() > $maxFileSize * 1024) {
                // Resize the image if it exceeds the max size
                $img->resize($maxWidth, $maxHeight, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
            }

            // Save the image
            $img->save($filePath);
            $input['image'] = $coverImage;
        }

        Auth::user()->news()->create($input);

        return redirect()->route('news.index')->with('success', 'Created Successfully');
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
