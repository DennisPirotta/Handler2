@php use Carbon\Carbon; @endphp
@extends('layouts.app')
@section('content')
    <div class="container p-5 bg-dark justify-content-center text-center">
        <img class="mb-2" width="64" src="{{ asset('/images/icons/' . $user->avatar) }}" alt="Avatar">
        <h2 class="text-white mb-4">{{ $user->name }}</h2>
        <div class="card text-start bg-darker">
            <ul class="list-group">
                <li class="list-group-item p-3 text-white bg-darker">
                    <span class="text-secondary">Email</span>
                    <span class="float-end">{{ $user->email }}</span>
                </li>
                <li class="list-group-item p-3 text-white bg-darker">
                    <span class="text-secondary">Ultimo Accesso</span>
                    <span class="float-end">{{ Carbon::parse($user->last_login_at)->translatedFormat('d M Y, H:i') }}</span>
                </li>
                <li class="list-group-item p-3 text-white bg-darker">
                    <span class="text-secondary">Ultimo IP</span>
                    <span class="float-end">{{ $user->last_login_ip }}</span>
                </li>
                <li class="list-group-item p-3 text-white bg-darker">
                    <span class="text-secondary">Email</span>
                    <span class="float-end">{{ $user->email }}</span>
                </li>
            </ul>
        </div>
    </div>
@endsection