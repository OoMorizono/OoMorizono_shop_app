<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\ItemRequest;





class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('items.create', compact('categories'));
    }

    public function store(ItemRequest $request)
    {

        $item = new Item();

        if (!empty($request->file('img_url'))) {
            $path = $request->file('img_url')->store('all_image', 'public');
            $item->img_url = $path;
        }

        $item->name = $request->name;
        $item->category_id = $request->category;
        $item->price = $request->price;
        $item->pr = $request->pr;

        $item->save();

        return redirect('/items');
    }

    public function edit(Item $item)
    {
        $categories = Category::all();
        return view('items.edit', compact('item', 'categories'));
    }

    public function update(ItemRequest $request, Item $item)
    {


        if (!empty($request->file('img_url'))) {
            $path = $request->file('img_url')->store('all_image', 'public');
            $item->img_url = $path;
        }

        $item->name = $request->name;
        $item->category_id = $request->category;
        $item->price = $request->price;
        $item->pr = $request->pr;

        $item->save();

        return redirect('/items');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect('/items');
    }
}
