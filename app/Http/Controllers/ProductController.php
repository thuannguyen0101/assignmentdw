<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return Product::all();
    }
    public function store(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->avatar = $request->avatar;
        $product->save();
        return response()->json(
            [
                'code'=>201,
                'message'=>'tạo mới sản phẩm thành công'
            ]
        );
    }
}
