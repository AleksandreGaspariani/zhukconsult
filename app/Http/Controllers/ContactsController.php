<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContactsController extends Controller
{
    public function index()
    {
        $contact = Contact::where('id','=',1)->first();
        return view('pages.contact', compact('contact'));
    }

    public function edit()
    {
        $contact = Contact::where('id','=','1')->first();
        return view('pages/contact.edit', compact('contact'));
    }
    public function update(Request $request){
        $contact = Contact::where('id','=',1)->first();

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/contact');
            $image->move($destinationPath, $name);
            $contact->image = $name;
        }
        if ($request->image_link){
            $contact->image_link = $request->image_link;
        }
        $contact->text = $request->text;
        $contact->save();
        return redirect()->route('contact')->with('success','Contact Updated Successfully');
    }

    public function editBanner(){
        $banner = 'contactBanner.jpg';
        return view('pages/contact.banner', compact('banner'));
    }

    public function updateBanner(Request $request){
        $banner = Banner::where('page', 'contact')->first();
        $fileName = $banner->image;
        //remove old
        if (File::exists(public_path('/media/'.$fileName))){
            File::delete(public_path('/media/'.$fileName));
        }
        //add new
        $request->file('file')->move(public_path('/media/'), $fileName);
        return redirect()->route('contact')->with('success','Banner updated successfully.');
    }
}
