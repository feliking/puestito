<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main () {
        $categories = Category::get();
        $products = Product::with('documents')->where('state', true)->get();
        return view('pages.index', ['categories' => $categories, 'products' => $products]);
    }

    public function product ($id) {
        $product = Product::with('documents', 'colors')->findOrFail($id);
        return view('pages.product', ['product' => $product]);
    }

    public function categoryProduct ($category_id) {
        $categories = Category::get();
        $category = Category::findOrFail($category_id);
        $products = Product::with('documents')->where('state', true)->where('category_id', $category_id)->get();
        return view('pages.index', ['categories' => $categories, 'products' => $products, 'name_category' => $category->name]);
    }
}
