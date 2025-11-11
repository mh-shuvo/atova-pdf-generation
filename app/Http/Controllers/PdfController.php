<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class PdfController extends Controller
{
    public function index()
    {
        $data=[
            'title'=>'Laravel PDF Generator',
            'heading'=>'Laravel PDF Generator',
        ];
        $pdf = Pdf::loadView('pdf.index', $data)->setPaper('a4', 'landscape');
        return $pdf->stream('invoice.css');
    }
}
