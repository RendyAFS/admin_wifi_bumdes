<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function viewpdf()
    {
        $pelanggans = Pelanggan::orderBy('status', 'asc')->get();

        return view('admin.download-pdf', compact('pelanggans'));
    }
    public function downloadpdf()
    {
        $pelanggans = Pelanggan::orderBy('status', 'asc')->get();


        $pdf = PDF::loadView('admin.download-pdf', compact('pelanggans'));

        return $pdf->download('Data-Pembayaran.pdf');
    }
}
