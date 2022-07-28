<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $data = Product::get();
        //return $data;
        return view('list', compact('data'));

    }

    public function add() {
        return view('add');
    }

    public function save(Request $request) {
        dd($request->all());
        $id = $request->id;
        $name = $request->name;
        $price = $request->price;
        $detail = $request->detail;
        $image1 = $request->image1;
        $image2 = $request->image2;
        $image3 = $request->image3;
        $producer = $request->producer;

        $product = new Product();
        
        $product->prdID = $id;
        $product->prdName = $name;
        $product->prdPrice = $price;
        $product->prdDetail = $detail;
        $product->prdImage1 = $image1;
        $product->prdImage2 = $image2;
        $product->prdImage3 = $image3;
        $product->prdcerID = $producer;

        return redirect()->back()->with('success', 'Add Product successfully');
    }
}
