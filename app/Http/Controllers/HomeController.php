<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::paginate(6);
        return view('', ['items' => $items]);
    }

    public function show($id)
    {
        $item = Item::where('id', $id)->firstOrFail();
        return view('show', compact('item', 'items'));
    }

    public function category($id)
    {
        $category = Category::where('id', $id)->firstOrFail();
        $items = $category->items()->paginate(6);
        return view('category', ['items' => $items, 'category' => $category->title]);
    }

    public function about(){
        return view('about');
    }
}
