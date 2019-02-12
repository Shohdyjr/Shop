<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use App\Product;
use App\Comment;

class ProductViewController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth')->except('productsview','productview');
    }

    public function productsview()
    {
        $products = Product::all();
        $images = Image::all();

        return view('front.home')->with(["products"=>$products,'images'=>$images]);
    }

    public function productview($id)
    {
        $product = Product::find($id);
        $images = Image::where('pro_id',$id)->get();
        return view('product.home')->with(["product"=>$product,'images'=>$images]);
    }




    public function addcomment(Request $request,$id){

        $this->validate($request,[

            'comment' => 'required|max:200'

        ]);

        $product = Product::findorfail($id);

        $c= new Comment();
        $c->user_id = auth()->user()->id;
        $c->pro_id = $product->id;
        $c->comment = $request->input('comment');
        $c->save();




        return redirect()->back();



    }


}
