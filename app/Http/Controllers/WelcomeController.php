<?php

namespace App\Http\Controllers;
use App\News;
use App\Event;
use App\Department;
use App\Category;
use App\Top;
use App\Ad;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {

        $fnews = News::where('featured', 1)->limit(4)->get();
        $fevents = Event::where('featured', 1)->limit(4)->get();
        $news = News::latest()->take(4)->get();
        $events = Event::latest()->take(4)->get();
        $ads = Ad::where('featured', '=', '1')->limit(6)->get();
        $tops = Top::all();
        return view('welcome', compact('news', 'events', 'fnews', 'fevents', 'tops', 'ads'));
    }

    public function partners()
    {
        return view('partners');
    }

    public function programs()
    {
        $programs = Department::all();
        return view('programs',compact('programs'));
    }

    public function sdgs()
    {
        $categories = Category::all();
        return view('sdgs',compact('categories'))->with('i');
    }
    public function sdgshow(Category $category)
    {
        return view('sdgshow',compact('category'));
    }
}
