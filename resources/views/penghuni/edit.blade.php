@extends('layouts.app')

@section('content')
    <h2>Edit Penghuni</h2>

    <form action="{{ url('penghuni/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="huni_nama" id="" class="form-control" value="{{ $row->huni_nama }}">
        </div>
        <div class="mb-3">
            <label for="">NO.TELPON</label>
            <input type="text" name="huni_hp" id="" class="form-control" value="{{ $row->huni_hp }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
