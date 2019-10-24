<?php

namespace App\Http\Controllers;

use App\ProductCatelogy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductCatelogyController extends Controller
{
    //
    public function create(){
        return view('productcatelogy.create');
    }

    public function store(Request $request){
        $name = $request->post('name');
        $displayname = $request->post('display_name');
        $product_catelogy = new ProductCatelogy;
        $product_catelogy->product_name = $name;
        $product_catelogy->product_display_name = $displayname;
        $product_catelogy->save();
        return redirect()->action('Auth\ProductCatelogyController@create');
    }
}
