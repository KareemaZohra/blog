<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.create_profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('cover'); //posted image bring
        $cover_name = md5(time().rand()).".".$image->getClientOriginalExtension(); //find out the name with extension
        $image->move(public_path('images'),$cover_name); // send the pic to "images" folder
        $image = $request->file('pp'); //posted image bring
        $pp_name = md5(time().rand()).".".$image->getClientOriginalExtension(); //find out the name with extension
        $image->move(public_path('images'),$pp_name); // send the pic to "images" folder

        $data = new profile([
            'cover' => $cover_name,
            'pp' => $pp_name,
            'addrs' => $request->addrs,
        ]);

        $data->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
