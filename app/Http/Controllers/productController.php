<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class productController extends Controller
{
    public function index(){
        $data=product::all();
        return view('frontend.home_content',compact('data'));
    }

    public function add(){
    	return view('backend.add_product');
    }

    public function dbupload(Request $value){
    	$image = $value->file('photo'); //posted image bring
    	$img_name = md5(time().rand()).".".$image->getClientOriginalExtension(); //find out the name with extension
    	$image->move(public_path('images'),$img_name); // send the pic to "images" folder

    	$up_data = new product([
    		'name' => $value->get('name'),
    		'price' => $value->get('price'),
    		'photo' => $img_name 
    	]);
    	
    	$up_data->save();
    }

    public function delete($id){
        $data = product::find($id);
        $data->delete();

        //redirect
        return redirect()->back();
    }


    public function edit($id){
        $data = product::find($id);
        return view('frontend.edit_data',compact('data'));
    }

    public function dbEdit(Request $value, $id){
        $image = $value->file('photo'); //posted image bring
        $img_name = md5(time().rand()).".".$image->getClientOriginalExtension(); //find out the name with extension
        $image->move(public_path('images'),$img_name); // send the pic to "images" folder

        $row=product::find($id); // table er ei id er full row

        $row->name = $value->get('name');
        $row->price = $value->get('price');
        $row->photo = $img_name;

        $row->save();

        return redirect()->back();
    }
}
