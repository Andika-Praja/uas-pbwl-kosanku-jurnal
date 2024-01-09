<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Penghuni;
use App\Models\Sewa;
use App\Models\User;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Sewa::with('kamar')->with('penghuni')->with('user')->get();

        return view('sewa.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penghuni = Penghuni::all();
        $kamar = Kamar::all();
        $users = User::all();

        return view('sewa.create', compact('penghuni','kamar', 'users'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->input());

        $row = $request->validate([
            'huni_id'=> 'required',
            'kam_id'=> 'required',
            'tgl_bayar'=> 'required',
            'bulan'=> 'required',
            'bayar'=> 'required',
            'user_id'=> 'required',
        ]);

        $sewa = new Sewa($row);
        $sewa->save();
        return redirect()->route('sewa');

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
        $penghuni = Penghuni::all();
        $kamar = Kamar::all();
        $users = User::all();

        $row = Sewa::find($id);
        return view('sewa.edit', compact('row', 'penghuni','kamar', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = $request->validate([
            'huni_id'=> 'required',
            'kam_id'=> 'required',
            'tgl_bayar'=> 'required',
            'bulan'=> 'required',
            'bayar'=> 'required',
            'user_id'=> 'required',
        ]);

        Sewa::whereId($id)->update($row);
        return redirect()->route('sewa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Sewa::find($id);
        $row->delete();
        return redirect()->route('sewa');
    }
}
