<?php

namespace App\Http\Controllers;
use App\Event;
use App\News;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['allevents', 'show']);
    }

    public function index()
    {
        $events = Event::all();
        return view('admin.events.index',compact('events'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function allevents()
    {
        $news = News::inRandomOrder()->get();
        $events = Event::orderBy('date', 'desc')->get();
        return view('allevents',compact('events', 'news'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.events.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'date' => 'nullable|date',
        ]);

        $input = $request->all();


        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $coverImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $coverImage);
            $input['image'] = "$coverImage";
        }

        Auth::user()->events()->create($input);

        return redirect()->route('events.index')->with('success', 'Created Succesfully');
    }

    public function show(Event $event)
    {
        return view ('admin.events.show', compact('event'));
    }

    public function unfeatureevent(Event $event)
    {
        $event->featured = '0';
        $event->save();

        return redirect()->route('events.index');
    }

    public function featureevent(Event $event)
    {
        $event->featured = '1';
        $event->save();

        return redirect()->route('events.index');
    }

    public function edit(Event $event)
    {
        $categories = Category::all();
        return view('admin.events.edit', compact('event', 'categories'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'date' => 'nullable|date',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $coverImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $coverImage);
            $input['image'] = "$coverImage";
        } else {
            $input['image'] = $event->image;
        }
        $event->update($input);
        return redirect()->route('events.index')->with('success', 'Event updated successfully');
    }
}
