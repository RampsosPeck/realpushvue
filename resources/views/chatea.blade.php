@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Aplicacion de chat en Laravel and Vue</div>

                <div class="card-body">
                    <message :messages="messages"></message>
                    <sent-message v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></sent-message>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 