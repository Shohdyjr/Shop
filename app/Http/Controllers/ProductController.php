<?php

namespace App\Http\Controllers;
use App\Image;
use App\Product;
//use Faker\Provider\Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function product()
    {
        $products = Product::all();

        return view('admin.product.product')->with("products",$products);
    }

    public function addproductform()
    {
        return view('admin.product.addproduct');
    }


    public function addproduct(Request $request)
    {

        $this->validate($request, [

            'name' => 'required',
            'info' => 'required',
            'price' => 'required',

        ]);


        $p = new Product();
        $p->name = $request->input('name');
        $p->info = $request->input('info');
        $fimg  = $request->file('images')[0];
        $p->image = time() . $fimg->getClientOriginalName() .'.' .  $fimg->getClientOriginalExtension();
        $p->price = $request->input('price');
        $p->cat_id = $request->input('cat');
        $p->save();


        if ($request->hasFile('images')) {

            $images = $request->file('images');
            foreach ($images as $image) {
                $imgname = time() . $image->getClientOriginalName() .'.' .  $image->getClientOriginalExtension();
                $image ->move('images', $imgname);
                $i = new Image();
                $i->image = $imgname;
                $i->pro_id = $p->id;
                $i->save();
            }
        }



        /****/





        return redirect(aurl('addproduct'))->with('msg','Product Added');
    }
}
