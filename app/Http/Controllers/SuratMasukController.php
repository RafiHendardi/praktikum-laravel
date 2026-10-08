<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index() {
        $suratMasuk = [
            [
                'id' => 1,
                'nomor_surat' => '001/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'Gua',
                'perihal' => 'Coba'
            ],
            [
                'id' => 2,
                'nomor_surat' => '002/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'Dia',
                'perihal' => 'Bisa'
            ],
            [
                'id' => 3,
                'nomor_surat' => '003/FT/x/2026',
                'tanggal' => '08-10-2026',
                'pengirim' => 'Mereka',
                'perihal' => 'Tidak Bisa'
            ]
        ];

        return view('surat-masuk.index', compact('suratMasuk'));
    }
    public function show($id) {
        return 'Detail Surat Masuk dengan ID:' . $id;
    }
}
