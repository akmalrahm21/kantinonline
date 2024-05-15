<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kantin;

class KantinController extends Controller
{
    public function index()
    {
        $kantins = Kantin::all();
        return view('kantins.index', compact('kantins'));
    }

    public function create()
    {
        return view('kantins.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pemasok' => 'required|exists:suppliers,id',
            'jenis_barang' => 'required|in:makanan,minuman',
            'nama_barang' => 'required',
            'harga' => 'required|numeric|min:0',
            'jumlah' => 'required|integer|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move(public_path('images'), $nama_gambar);
        } else {
            $nama_gambar = null;
        }

        Kantin::create([
            'id_pemasok' => $request->id_pemasok,
            'jenis_barang' => $request->jenis_barang,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'gambar' => $nama_gambar,
        ]);

        return redirect()->route('kantins.index')
                         ->with('success', 'Kantin created successfully.');
    }

    public function show(Kantin $kantin)
    {
        return view('kantins.show', compact('kantin'));
    }

    public function edit(Kantin $kantin)
    {
        return view('kantins.edit', compact('kantin'));
    }

    public function update(Request $request, Kantin $kantin)
    {
        $request->validate([
            'id_pemasok' => 'required|exists:suppliers,id',
            'jenis_barang' => 'required|in:makanan,minuman',
            'nama_barang' => 'required',
            'harga' => 'required|numeric|min:0',
            'jumlah' => 'required|integer|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move(public_path('images'), $nama_gambar);
        } else {
            $nama_gambar = $kantin->gambar;
        }

        $kantin->update([
            'id_pemasok' => $request->id_pemasok,
            'jenis_barang' => $request->jenis_barang,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'gambar' => $nama_gambar,
        ]);

        return redirect()->route('kantins.index')
                         ->with('success', 'Kantin updated successfully');
    }

    public function destroy(Kantin $kantin)
    {
        $kantin->delete();

        return redirect()->route('kantins.index')
                         ->with('success', 'Kantin deleted successfully');
    }
}
