<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $id;

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

    public function about()
    {
        return view('about');
    }

    public function order(Request $request)
    {
        $this->id = $request->id;
        return view('order');
    }

    public function mail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);
    }
}
