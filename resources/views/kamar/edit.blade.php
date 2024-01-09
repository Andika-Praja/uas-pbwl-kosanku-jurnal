@extends('layouts.app')

@section('content')
    <h2>Edit Kamar</h2>

    <form action="{{ url('kamar/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="kam_nama" id="" class="form-control" value="{{ $row->kam_nama }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
