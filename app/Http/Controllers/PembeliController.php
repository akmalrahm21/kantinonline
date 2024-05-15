<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kantins;

class PembeliController extends Controller
{
    public function indexPembeli()
    {
        $kantins = Kantin::all();
        return view('pembeli.index', compact('kantins'));
    }
    
}
