<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClientsController extends Controller
{
    public function index(){
        $clients = Client::all();

        return view('pages.our_clients',compact('clients'));
    }

    public function create(){
        return view('pages.clients.create');
    }

    public function store(Request $request){
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'required',
        ]);

        $client = new Client();
        $client->link = $request->link;
        $imageName = time().'.'.$request->file->extension();
        $client->image = $imageName;
        $request->file('file')->move(public_path('/uploads/clients'), $imageName);
        $client->save();

        return redirect()->route('our_clients')->with('success','Post added successfully.');
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

    public function destroy($id){
        $client = Client::find($id);
        $fileName = $client->image;
        if (File::exists(public_path('/uploads/clients/'.$fileName))){
            File::delete(public_path('/uploads/clients/'.$fileName));
        }
        $client->delete();
        return redirect()->route('our_clients')->with('success','Post deleted successfully.');
    }

}
