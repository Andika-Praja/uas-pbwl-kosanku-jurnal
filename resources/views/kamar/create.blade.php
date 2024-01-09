@extends('layouts.app')

@section('content')
    <h2>Add Kamar</h2>

    <form action="{{ url('kamar') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="kam_nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
