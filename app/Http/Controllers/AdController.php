<?php

namespace App\Http\Controllers;
use App\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['allnews', 'show']);
    }

    public function index()
    {
        $ads = Ad::all();
        return view('admin.ads.index',compact('ads'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function allads()
    {
        $ads = Ad::all();
        return view('allads',compact('ads'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.ads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=1000,height=600',
        ]);

        $input = $request->all();


        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $coverImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $coverImage);
            $input['image'] = "$coverImage";
        }

        Auth::user()->ads()->create($input);

        return redirect()->route('ads.index')->with('success', 'Created Succesfully');
    }

    public function show(Ad $ad)
    {
        return view ('admin.ads.show', compact('ad'));
    }

    public function unfeaturead(Ad $ad)
    {
        $ad->featured = '0';
        $ad->save();

        return redirect()->route('ads.index');
    }

    public function featuread(Ad $ad)
    {
        $ad->featured = '1';
        $ad->save();

        return redirect()->route('ads.index');
    }

}
