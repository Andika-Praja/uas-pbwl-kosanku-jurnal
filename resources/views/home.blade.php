@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-black text-white">
                    <strong><h2>{{ __('Dashboard') }}</h2></div></strong>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>{{ __('SELAMAT DATANG !!!') }}</h4>
                    <br></br>
                    <p>Mulailah, Keseharian mu di Website ini</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
