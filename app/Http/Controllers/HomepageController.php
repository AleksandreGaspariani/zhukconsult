<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Homepage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Footer;

class HomepageController extends Controller
{

    public function index()
    {
        $footerRow = Footer::first()->get();
        $footer = $footerRow[0]['footer_text'];
        session()->put('footer',$footer);

        $posts = Homepage::all();
        return view('pages.home', compact('posts'));
        //
    }


    public function create()
    {
        return view('pages/homepage.create');
    }


    public function store(Request $request)
    {
        $valid = $request->validate([
            'post_text' => 'required',
            'file' => 'required'
        ]);

        $file = $valid['file'];
        $fileName = time() . '-' . $file->getClientOriginalName();
        $request->file('file')->move(public_path('/uploads/homeImgs'), $fileName);
        $model = new Homepage();
        $model->image_name = $fileName;
        $model->text = $valid['post_text'];
        $model->user_id = 1;
        $model->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Homepage $homepage
     * @return \Illuminate\Http\Response
     */
    public function show(Homepage $homepage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Homepage $homepage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Homepage::find($id)->first();
        $text = $post['text'];
        $image = $post['image_name'];
        $postId = $post['id'];
        return view('pages/homepage.edit',compact('text','image','postId'));
    }

    public function destroy($id)
    {
        $post = Homepage::where('id',$id)->firstOrFail();
        $post->delete();
        return redirect()->route('home');
    }

    public function editBanner()
    {
        $banner = 'homepageBanner.jpg';
        return view('pages/homepage/banner', compact('banner'));
    }

    public function storeBanner(Request $request)
    {

        $banner = Banner::where('page', 'home')->first();
        $fileName = $banner->image;
        //remove old
        if (File::exists(public_path('/media/'.$fileName))){
            File::delete(public_path('/media/'.$fileName));
        }
        //add new
        $request->file('file')->move(public_path('/media/'), $fileName);
        return redirect()->route('home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Homepage $homepage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $post = Homepage::find($id)->first();

        $valid = $request->validate([
            'post_text' => 'required',
        ]);

        if (isset($request['file'])){
//            dd($request['file']->getClientOriginalName());

            $fileName = time() . '-' . $request['file']->getClientOriginalName();
            $request->file('file')->move(public_path('/uploads/homeImgs'), $fileName);
            $post->image_name = $fileName;
            $post->text = $valid['post_text'];
            $post->updated_At = Carbon::now('Asia/Baku')->format('Y-m-d H:i:s');
            $post->save();
        }else {
            $post->image_name = $request['image_default'];
            $post->text = $request['post_text'];
            $myTime = Carbon::now('Asia/Baku')->format('Y-m-d H:i:s');
            $post->updated_at = $myTime;
            $post->save();
        }

        return redirect()->route('home');

    }
}
