<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonials::orderBy('created_at', 'desc')->get();
        return view('pages/testimonials', compact('testimonials'));
    }
    public function create()
    {
        return view('pages/testimonials.create');
    }
    public function store(Request $request)
    {
        $valid = $request->validate([
            'text' => 'required',
            'file' => 'required',
        ]);
        $file = $valid['file'];
        $fileName = time() . '-' . $file->getClientOriginalName();
        $request->file('file')->move(public_path('/uploads/testimonials'), $fileName);
        $testimonial = new Testimonials();
        $testimonial->text = $request->text;
        $testimonial->image = $fileName;
        $testimonial->save();

        return redirect()->route('testimonials')->with('success', 'Testimonial created successfully.');
    }
    public function edit($id)
    {
        $testimonial = Testimonials::find($id);
        return view('pages/testimonials.edit', compact('testimonial'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required',
            'image' => 'required',
        ]);
        $testimonial = Testimonials::find($id);
        $testimonial->text = $request->text;
        $testimonial->image = $request->image;
        $testimonial->save();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully');
    }
    public function destroy($id)
    {
        $testimonial = Testimonials::find($id);
        $testimonial->delete();
        return redirect()->route('testimonials')->with('success', 'Testimonial deleted successfully');
    }
    public function editBanner(){
        $banner = Testimonials::where('page','=','testimonial')->first();
        $text = $banner['text'];
        $image = $banner['image'];
        $bannerId = $banner['id'];

        return view('pages/testimonials.editBanner',compact('text','image','bannerId'));
    }
    public function updateBanner(Request $request, $id){
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path('/uploads/testimonials'), $fileName);
            $request->image = $fileName;
        }

        $banner = Testimonials::find($id);
        $banner->text = $request->text;
        $banner->image = $request->image;
        $banner->save();
        return redirect()->route('testimonials.index')->with('success', 'Banner updated successfully');
    }

}
