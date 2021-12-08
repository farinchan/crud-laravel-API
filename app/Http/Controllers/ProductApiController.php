<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response() -> json(["message" => "succes", "data" => $products]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response() -> json(["message" => "succes", "data" => $product]);
    }
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response() -> json(["message" => "succes", "data" => $product]);
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id) -> update($request->all());
        return response() -> json(["message" => "succes", "data" => $product]);
    }
    public function destroy($id)
    {
        $product = Product::find($id) -> delete();
        return response() -> json(["message" => "succes", "data" => null]);

    }
}
