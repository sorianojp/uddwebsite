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
        $featured = collect();
        $featured = $featured->merge(News::where('featured', '=', '1')->limit(3)->get());
        $featured = $featured->merge(Event::where('featured', '=', '1')->limit(3)->get());
        $news = News::latest()->take(3)->get();
        $events = Event::latest()->take(3)->get();
        $ads = Ad::where('featured', '=', '1')->limit(6)->get();
        $tops = Top::all();
        return view('welcome', compact('news', 'events', 'featured', 'tops', 'ads'));
    }

    public function partners()
    {
        return view('partners');
    }

    public function programs()
    {
        $news = News::inRandomOrder()->get();
        $events = Event::inRandomOrder()->get();
        $programs = Department::all();
        return view('programs',compact('programs', 'events', 'news'));
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
