<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function create(){
        return view('pages.pdf.create');
    }

    public function store(Request $request){
        $request->validate([
            'file' => 'required|mimes:pdf',
        ]);

        $fileName = $request->file->getClientOriginalName();
        $request->file('file')->move(public_path('/pdfs'), $fileName);

        return redirect()->route('home')->with('success','PDF added successfully.');
    }
}
