<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all tamu records from the database
        $tamus = Tamu::all();

        // Return a view with the retrieved data
        return view('tamu.index', compact('tamu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return a view for creating a new tamu record
        return view('tamu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'telepon' => 'required|string|max:20',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tujuan' => 'required|string',
        ]);

        // Store the validated data in the database
        $tamu = Tamu::create($validatedData);

        // Redirect to a specified route or URL
        return redirect()->route('tamu.index')->with('success', 'Tamu created successfully');
    }

    // Other controller methods for showing, editing, updating, and deleting records...

}
