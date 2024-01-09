<?php

namespace App\Http\Controllers;

use App\Models\Penghuni;
use Illuminate\Http\Request;

class PenghuniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Penghuni::get();
        return view('penghuni.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penghuni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $row['huni_nama']  =$request->huni_nama;
        $row['huni_hp']  =$request->huni_hp;

        Penghuni::create($row);
        return redirect('penghuni');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Penghuni::find($id);
        return view('penghuni.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row['huni_nama']  =$request->huni_nama;
        $row['huni_hp']  =$request->huni_hp;

        Penghuni::whereId($id)->update($row);
        return redirect('penghuni');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Penghuni::find($id);
        $row->delete();
        return redirect('penghuni');
    }
}
