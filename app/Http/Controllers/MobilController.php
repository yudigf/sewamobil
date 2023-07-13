<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobils = Mobil::all();

        return view('mobil.index', compact('mobils'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'merek' => 'required',
            'model' => 'required',
            'nomor_plat' => 'required',
            'tarif_sewa_per_hari' => 'required|numeric|min:0',
        ]);

        Mobil::create($validatedData);

        return redirect()->back()->with('success', 'Mobil berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $mobils = Mobil::where('merek', 'like', "%$keyword%")
            ->orWhere('model', 'like', "%$keyword%")
            ->orWhere('tersedia', $keyword === 'tersedia')
            ->get();

        return view('mobil.index', compact('mobils'));
    }
}
