<?php

namespace App\Http\Controllers;

use App\Models\DownloadFicha;
use Illuminate\Http\Request;

class DownloadFichaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cnpj' => 'required',
            'phone' => 'required'
        ]);

        DownloadFicha::create([
            'name' => $request->name,
            'cnpj' => $request->cnpj,
            'phone' => $request->phone
        ]);

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DownloadFicha $downloadFicha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DownloadFicha $downloadFicha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DownloadFicha $downloadFicha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DownloadFicha $downloadFicha)
    {
        //
    }
}
