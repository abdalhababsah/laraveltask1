<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsConroller extends Controller
{
    public function index(){
        return view("products.index");
    }

    public function create(){
        return view("products.create");
    }

    public function store(Request $request){
        $data = $request->validate([
            "name" => "required",
            "qty" => "required|numeric",
            "price" => "required|numeric|between:0,999999.99",
            "description" => "nullable"
        ]);

        $product = Product::create($data);

        return redirect(route('product.index'));
    }
}
