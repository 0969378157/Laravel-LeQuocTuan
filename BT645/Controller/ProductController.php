<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function AddProduct(Request $request){
    	$nameProduct = $imageLink = $price = $priceReduce = $description = "";
    	$nameProduct = $request->nameProduct;
    	$imageLink = $request->imageLink;
    	$price = $request->price;
    	$priceReduce = $request->priceReduce;
    	$description = $request->description;

    	if ($nameProduct == '' || $imageLink == '' || $price =='' || $priceReduce =='' || $description =='') {
    		return view('productView');
    	}
    	else{
    		echo "Tên sản phẩm : ".$nameProduct;
    		echo "</br>";
    		echo "Link ảnh : ".$imageLink;
    		echo "</br>";
    		echo "Giá :".$price;
    		echo "</br>";
    		echo "Giảm giá : ".$priceReduce;
    		echo "</br>";
    		echo "Mô tả : ".$description;
    	}
    }
}
