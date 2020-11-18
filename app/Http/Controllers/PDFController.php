<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Barryvdh\DomPDF\Facade as PDF;
use Spatie\Browsershot\Browsershot;

class PDFController extends Controller
{
    function generatePDF()
    {
        // $pdf = PDF::loadView('cv');
        // return $pdf->download('cv.pdf');
        Browsershot::html('<h1>Hello world!!</h1>')->save('example.pdf');
    }
}
