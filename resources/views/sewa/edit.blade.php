@extends('layouts.app')

@section('content')
    <h2>Edit Sewa</h2>

  <form action="{{ route('sewa_update', ['id' => $row->id]) }}" method="POST">
    {{-- <form action="{{ url('sewa/' . $row->id) }}" method="post"> --}}
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="mb-3">
            <label for="id">Penghuni:</label>
            <select class="form-select" id="id" name="huni_id" required>
            <option value="">Pilih Penghuni</option>
                @foreach ($penghuni as $penghuni )
                    <option value="{{$penghuni->id}}"> {{$penghuni->huni_nama}} </option>
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
            <label for="">Tanggal Bayar</label>
            <input type="date" name="tgl_bayar" id="" class="form-control" value="{{ $row->tgl_bayar }}">
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
            <label for="">Jumlah Bayar</label>
            <input type="text" name="bayar" id="" class="form-control" value="{{ $row->bayar }}">
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
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection