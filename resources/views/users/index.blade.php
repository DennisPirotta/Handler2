@php use Carbon\Carbon; @endphp
@extends('layouts.app')
@section('content')
    <div class="container p-5 bg-dark justify-content-center text-center">
        <img class="mb-2" width="64" src="{{ asset('/images/icons/' . $user->avatar) }}" alt="Avatar">
        <h2 class="text-white mb-4">{{ $user->name }}</h2>
        <div class="card text-start bg-darker mb-4">
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
        <div class="card text-start bg-darker mb-4">
            <div class="card-body">
                <span class="text-secondary">Stato</span>
                <span class="float-end text-white">
                        @if($user->isOnline())
                        Online &#128994;
                    @else
                        Offline &#128308;
                    @endif
                    </span>
            </div>
        </div>
        <form method="post" action="{{ route('logout') }}" class="d-none" id="logout-form"> @csrf </form>
        <button class="btn btn-dark bg-darker w-100 mb-2 p-3" onclick="$('#logout-form').submit()"><i class="bi bi-door-open"></i> Logout</button>
        <button class="btn btn-dark bg-darker w-100 mb-2 p-3" onclick="window.location.href = '{{ route('password.request') }}'"><i class="bi bi-key"></i> Cambia Password</button>
        <button class="btn btn-dark bg-darker w-100 mb-2 p-3"><i class="bi bi-key"></i> Modifica Account</button>
    </div>
@endsection