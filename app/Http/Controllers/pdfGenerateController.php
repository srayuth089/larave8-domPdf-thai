<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class pdfGenerateController extends Controller
{
    //
    public function generate(){
        $pdf = App::make('dompdf.wrapper');
        $html = view('pdf')->render();
        $pdf->loadHTML($html);
        return $pdf->stream();
    }
}
