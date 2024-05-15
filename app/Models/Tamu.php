<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'telepon' => 'required|string|max:20',
            'tanggal' => 'nullable|date',
            'gambar' => 'required|string|max:255',
            'tujuan' => 'required|string',
        ]);

        // Simpan data tamu baru ke dalam basis data
        $tamu = Tamu::create($validatedData);

        // Lanjutkan dengan logika bisnis atau redirect ke halaman lain
    }
}
