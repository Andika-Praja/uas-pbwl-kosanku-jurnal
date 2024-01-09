@extends('layouts.app')

@section('content')
<h2>Add Sewa</h2>

<form action="{{ route('sewa_store') }}" method="POST" class="mt-3">
    @csrf
    <div class="mb-3">
        <label for="id">Penghuni:</label>
        <select class="form-select" id="id" name="huni_id" required>
        <option value="">Pilih Penghuni</option>
            @foreach ($penghuni as $data )
                <option value="{{$data->id}}">{{$data->huni_nama}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="id">Kamar:</label>
        <select class="form-select" id="id" name="kam_id" required>
        <option value="">Pilih Kamar</option>
            @foreach ($kamar as $kamar )
                <option value="{{$kamar->id}}">{{$kamar->kam_nama}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="tgl_bayar">Tanggal Bayar:</label>
        <input type="date" name="tgl_bayar" class="form-control" placeholder="Masukkan Tanggal Bayar" required>
    </div>
    <div class="mb-3">
        <label for="bulan">Bulan Pembayaran:</label>
        <select name="bulan" class="form-select" required>
            <option value="">Pilih Bulan</option>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
        </select>
    </div>  
    <div class="mb-3">
        <label for="bayar">Jumlah Bayar:</label>
        <input type="text" name="bayar" class="form-control" placeholder="Masukkan Jumlah Pembayaran" required>
    </div> 
    <div class="mb-3">
        <label for="id">User:</label>
        <select class="form-select" id="id" name="user_id" required>
        <option value="">Pilih Users</option>
            @foreach ($users as $user )
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <input type="submit" value="SAVE" class="btn btn-primary">
    </div>
</form>

@endsection