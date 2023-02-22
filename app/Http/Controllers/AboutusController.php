<?php

namespace App\Http\Controllers;

use App\Models\aboutUsFooter;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\Aboutus;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class AboutusController extends Controller
{
    public function index(){
        $footer = aboutUsFooter::find(1)->first();

        $posts = Aboutus::orderBy('id','desc')->get();
        return view('pages/about_us',compact('posts','footer'));

    }

    public function create(){
        return view('pages/aboutus.create');
    }

    public function editBanner()
    {
        $banner = 'about_usBanner.jpg';
        return view('pages/aboutus.banner', compact('banner'));
    }

    public function storeBanner(Request $request)
    {
        $banner = Banner::where('page', 'about_us')->first();

        $fileName = $banner->image;
        //remove old
        if (File::exists(public_path('/media/'.$fileName))){
            File::delete(public_path('/media/'.$fileName));
        }
        //add new
        $request->file('file')->move(public_path('/media/'), $fileName);
        return redirect()->route('about_us')->with('success','Banner changed successfully');
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'post_text' => 'required',
            'file' => 'required',
            'post_email' => 'required'
        ]);

        $file = $valid['file'];
        $fileName = time() . '-' . $file->getClientOriginalName();
        $request->file('file')->move(public_path('/uploads/aboutUsImgs'), $fileName);
        $model = new Aboutus();
        $model->image_name = $fileName;
        $model->text = $valid['post_text'];
        $model->email = $valid['post_email'];

        $model->save();

        return redirect()->route('about_us');
    }

    public function edit($id)
    {
        $post = Aboutus::where('id','=',$id)->first();
        $text = $post['text'];
        $image = $post['image_name'];
        $postId = $post['id'];
        $email = $post['email'];
        return view('pages/aboutus.edit',compact('text','image','postId','email'));
    }
    public function update(Request $request){
        $post = Aboutus::where('id','=',$request['post_id'])->first();

        $valid = $request->validate([
            'post_text' => 'required',
        ]);

        if (isset($request['file'])){
            $fileName = time() . '-' . $request['file']->getClientOriginalName();
            $request->file('file')->move(public_path('/uploads/aboutUsImgs'), $fileName);
            $post->image_name = $fileName;
            $post->text = $valid['post_text'];
            $post->email = $request['email'];
            $post->updated_At = Carbon::now('Asia/Baku')->format('Y-m-d H:i:s');
            $post->save();
        }else {
            $post->image_name = $request['image_default'];
            $post->text = $request['post_text'];
            $post->email = $request['email'];
            $myTime = Carbon::now('Asia/Baku')->format('Y-m-d H:i:s');
            $post->updated_at = $myTime;
            $post->save();
        }

        return redirect()->route('about_us');
    }

    public function destroy($id){
        $post = Aboutus::where('id','=',$id)->first();
        $post->delete();
        return redirect()->back();
    }

    public function footerEdit(){
        $footer = aboutUsFooter::where('id','=','1')->get();
        return view('pages/aboutus.editFooter',compact('footer'));
    }

    public function footerUpdate(Request $request, $id){
        $post = aboutUsFooter::where('id','=',$id)->first();

//        $valid = $request->validate([
//            'post_text' => 'required',
//        ]);

        $post->footer_text = $request['text'];
        $post->footer_email = $request['email'];
        $myTime = Carbon::now('Asia/Baku')->format('Y-m-d H:i:s');
        $post->updated_at = $myTime;
        $post->save();

        return redirect()->route('about_us');
    }
}
