@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Has iniciado sesión! Ahora puedes chatear 
                    <a href="{{ route('write') }}">Escribe</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 