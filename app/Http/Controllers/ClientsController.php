<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClientsController extends Controller
{
    public function index(){
        $posts = Client::all();
        return view('pages.our_clients',compact('posts'));
    }

    public function editBanner(){
        $banner = 'ourClients.jpg';
        return view('pages/clients.banner',compact('banner'));
    }

    public function storeBanner(Request $request){

        $banner = Banner::where('page', 'our_clients')->first();
        $fileName = $banner->image;
        //remove old
        if (File::exists(public_path('/media/'.$fileName))){
            File::delete(public_path('/media/'.$fileName));
        }
        //add new
        $request->file('file')->move(public_path('/media/'), $fileName);
        return redirect()->route('our_clients')->with('success','Banner updated successfully.');
    }


}
