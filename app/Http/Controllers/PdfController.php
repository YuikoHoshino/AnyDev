<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdf_index(){
        return view('pdf.pdf_index');
    }

    public function pdf_preview(){
        $pdf = \PDF::loadHTML('<h1>HELLO</h1>');
        return $pdf->stream();
    }

    public function pdf_dl(){
        $pdf = \PDF::loadView('pdf.generate_pdf');
        //Name of PDF File
        return $pdf->download('file_name.pdf');
    }
}
