<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function category()
    {
        $cats = Category::all();

        return view('admin.category.category')->with("cats",$cats);
    }

    public function categoryview($id)
    {
        //$catID = Category::find($id);
        $products = Product::where('cat_id' , $id)->get();
        return view('front.categoryview')->with('products',$products);

    }


    public function addcategoryform()
    {
        return view('admin.category.addcategory');
    }


    public function addcategory(Request $request)
    {

        $this->validate($request ,[

            'name'=>'required'
        ]);

        $c = new Category();
        $c->name = $request->input('name');
        $c->save();
        return redirect(aurl('addcategory'))->with('msg','Category Added');
    }
}
