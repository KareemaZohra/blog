<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class homeController extends Controller
{
	
    public function index(){
    	$data = product::all();
    	return view('frontend.home_content',compact('data'));
    }

    public function view_full($id){
    	$data = product::find($id);
    	return view('frontend.single_product',compact('data'));
    }
    
}
