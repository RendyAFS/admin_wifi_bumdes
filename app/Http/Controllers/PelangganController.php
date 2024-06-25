<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Pelanggan;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // Pelanggan
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


    // Riwayat
    public function viewriwayatpdf()
    {
        $riwayats = Riwayat::orderBy('id', 'asc')->get();

        return view('admin.download-riwayat-pdf', compact('riwayats'));
    }
    public function downloadriwayatpdf(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $riwayats = Riwayat::whereBetween('tgl_bayar', [$start_date, $end_date])
            ->orderBy('id', 'asc')
            ->get();

        $pdf = PDF::loadView('admin.download-riwayat-pdf', compact('riwayats'));

        return $pdf->download('Riwayat-Data-Pembayaran.pdf');
    }

}
