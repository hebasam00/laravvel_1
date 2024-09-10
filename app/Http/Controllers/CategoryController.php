<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect('/categories');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function bags()
    {
        $bags = [
            ['name' => 'Classic Bags', 'image' => 'images/OIP.jpg', 'route' => 'classic.bags'],
         
        ];

        return view('bags.index', compact('bags'));
    }
}
