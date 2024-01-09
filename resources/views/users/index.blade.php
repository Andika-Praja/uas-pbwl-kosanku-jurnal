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
    <h2 class="text-center mb-4" style="color: #000;">USERS</h2>

<a href="{{ url('users/create') }}" class="btn btn-primary mb-3 float-end"><i class="fa-solid fa-person-circle-plus"></i> Add</a>

<table class="table table-striped custom-table">
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>EMAIL</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr> 

    @php
        $counter = 1; // Inisialisasi variabel counter
    @endphp

    @foreach ($rows as $row)
        <tr>
            <td>{{ $counter++ }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td><a href="{{ url('users/edit/' . $row->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td>
                <form action="{{ url('users/' . $row->id) }}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <button type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        <i class="fa-solid fa-delete-left"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach

</table>

@endsection
