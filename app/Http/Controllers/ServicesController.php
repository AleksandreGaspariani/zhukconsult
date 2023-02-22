<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\File;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('pages.our_services',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $text = Service::find($id)->first();
        return view('pages/services.edit',compact('text'));
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
        $this->validate($request,[
            'text' => 'required'
        ]);

        $text = Service::find($id)->first();
        $text->text = $request->text;
        $text->save();
        return redirect()->route('our_services');
    }

    public function editBanner()
    {
        $banner = 'ourServices.jpg';
        return view('pages/services.banner', compact('banner'));
    }

    public function storeBanner(Request $request)
    {
        $banner = Banner::where('page', 'our_services')->first();

        $fileName = $banner->image;
        //remove old
        if (File::exists(public_path('/media/'.$fileName))){
            File::delete(public_path('/media/'.$fileName));
        }
        //add new
        $request->file('file')->move(public_path('/media/'), $fileName);
        return redirect()->route('our_services')->with('success','Banner changed successfully');
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
