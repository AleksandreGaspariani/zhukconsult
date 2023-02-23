<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    //

    public function edit(){
        $footer = Footer::first()->get();
//        dd($footer);
        return view('admin.footer.edit',compact('footer'));
    }

    public function update(Request $request){
        $valid = $request->validate([
            'footer_text' => 'required',
        ]);

        $footer = Footer::first();
        $footer->footer_text = $request->footer_text;
        $footer->save();
        return redirect()->route('home')->with('success','Footer updated successfully');
    }
}
