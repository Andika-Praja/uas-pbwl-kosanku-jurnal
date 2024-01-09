@extends('layouts.app')

@section('content')
    <h2>Add Penghuni</h2>

    <form action="{{ url('penghuni') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="huni_nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">NO. TELPON</label>
            <input type="text" name="huni_hp" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
