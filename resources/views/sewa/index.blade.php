@extends('layouts.app')
@section('content')

<style>
    .custom-table {
        border: 2px solid black; 
        border-collapse: collapse; 
        width: 100%;
    }

    .custom-table th {
        background-color: #a2a2a2; 
        border: 1px solid black; 
    }

    .custom-table td {
        border: 1px solid black; 
    }
</style>

<div class="container mt-5">
    <h2 class="text-center mb-4" style="color: #00000;">SEWA</h2>

<a href="{{ url('sewa/create') }}" class="btn btn-primary mb-3 float-end"><i class="fa-solid fa-person-circle-plus"></i> Add</a>

<table class="table table-striped custom-table">
            <tr>
                <th>NO</th>
                <th>NAMA PENGHUNI</th>
                <th>NOMOR KAMAR</th>
                <th>TANGGAL BAYAR</th>
                <th>BULAN PEMBAYARAN</th>
                <th>JUMLAH</th>
                <th>USERS</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>

        <tbody>
            @php
                $counter = 1; // Inisialisasi variabel counter
            @endphp

            @foreach ($rows as $row)
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>{{ $row->penghuni->huni_nama }}</td>
                    <td>{{ $row->kamar->kam_nama }}</td>
                    <td>{{ $row->tgl_bayar }}</td>
                    <td>{{ $row->bulan }}</td>
                    <td>{{ $row->bayar }}</td>
                    <td>{{ $row->user->name }}</td>
                    <td>
                        <a href="{{ url('sewa/edit/' . $row->id) }}" class="btn btn-warning">
                            <i class="fas fa-pen-to-square"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('sewa_delete', ['id' => $row->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
