<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function add(){
    	return view('backend.add_product');
    }

    public function dbupload(){
    	echo "Hello im upload";
    }
}
