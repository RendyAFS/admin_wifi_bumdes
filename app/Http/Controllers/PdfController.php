<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function viewpdf(){
        $pelanggans = Pelanggan::orderBy('status', 'asc')->get();

        return view ('admin.download-pdf', compact('pelanggans'));
    }
    public function downloadpdf(){
        $pelanggans = Pelanggan::orderBy('status', 'asc')->get();


        $pdf = PDF::loadView('admin.download-pdf', compact('pelanggans'));

        return $pdf->download('Data-Pembayaran.pdf');
    }
}
