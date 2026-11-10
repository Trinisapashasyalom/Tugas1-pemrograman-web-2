<?php

namespace App\Http\Controllers;

use App\Models\Servismobil;
use Illuminate\Http\Request;

class ServisMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('servis-mobil.index', [
            'title' => 'Servis Mobil - AutoCare',
            'servismobils' => Servismobil::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servis-mobil.create', [
            'title' => 'Tambah Servis Mobil',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pelanggan' => 'required',
            'no_polisi' => 'required',
            'merek_mobil' => 'required',
            'jenis_servis' => 'required',
            'tanggal_servis' => 'required|date',
            'biaya_servis' => 'required|numeric',
            'keluhan' => 'required',
            'status_servis' => 'required',
        ], [
            'nama_pelanggan.required' => 'Nama pelanggan wajib diisi.',
            'no_polisi.required' => 'Nomor polisi wajib diisi.',
            'merek_mobil.required' => 'Merek mobil wajib diisi.',
            'jenis_servis.required' => 'Jenis servis wajib diisi.',
            'tanggal_servis.required' => 'Tanggal servis wajib diisi.',
            'biaya_servis.required' => 'Biaya servis wajib diisi.',
            'keluhan.required' => 'Keluhan wajib diisi.',
            'status_servis.required' => 'Status servis wajib diisi.',
        ]);

        Servismobil::create($validated);

        return redirect()->route('servis-mobil.index');
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
    public function edit(Servismobil $servismobil)
    {
        return view('servis-mobil.edit', [
            'title' => 'Edit Servis Mobil',
            'servismobil' => $servismobil,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servismobil $servismobil)
    {
 $validated = $request->validate([
            'nama_pelanggan' => 'required',
            'no_polisi' => 'required',
            'merek_mobil' => 'required',
            'jenis_servis' => 'required',
            'tanggal_servis' => 'required|date',
            'biaya_servis' => 'required|numeric',
            'keluhan' => 'required',
            'status_servis' => 'required',
        ], [
            'nama_pelanggan.required' => 'Nama pelanggan wajib diisi.',
            'no_polisi.required' => 'Nomor polisi wajib diisi.',
            'merek_mobil.required' => 'Merek mobil wajib diisi.',
            'jenis_servis.required' => 'Jenis servis wajib diisi.',
            'tanggal_servis.required' => 'Tanggal servis wajib diisi.',
            'biaya_servis.required' => 'Biaya servis wajib diisi.',
            'keluhan.required' => 'Keluhan wajib diisi.',
            'status_servis.required' => 'Status servis wajib diisi.',
        ]);

        $servismobil->update($validated);

        return to_route('servis-mobil.index')
            ->withSuccess('Data servis mobil berhasil diubah.');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
