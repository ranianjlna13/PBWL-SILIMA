<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Halaman Home 
        return view('mahasiswa/mahasiswa');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Halaman Tambah
        return view('mahasiswa/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Halaman Simpan Tambah
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Halaman Detail
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Halaman Edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Halaman Simpan Edit
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Halaman Hapus
    }
}
