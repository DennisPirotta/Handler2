@php use Carbon\Carbon; @endphp
@extends('layouts.app')
@section('content')
    {{-- <x-toast :message="'Hello world! This is a toast message.'" :icon="'fa-info-circle'"></x-toast> --}}
    <div class="container bg-dark p-4 mb-2">
        <div class="row">
            <div class="col-2 d-flex justify-content-start">
                <a href="javascript:history.go(-1)">
                    <i class="bi bi-arrow-left text-white"></i>
                </a>
            </div>
            <div class="col-8 d-flex justify-content-center text-white">Dettagli</div>
            <div class="col-2"></div>
        </div>
    </div>
    <div class="container shadow-sm p-3 bg-dark">
        <h6 class="mt-4 mb-3 text-opacity-25 text-white">
            {{ $transaction->customer->name }}
        </h6>
        <h3 class="text-white mb-3">{{$transaction->type === 0 ? '+' : '-'}} {{ $transaction->price }} <i
                    class="bi bi-currency-euro"></i></h3>
        <div class="card" style="background-color: #1b1b1b">
            <ul class="list-group">
                <li class="list-group-item p-3 text-white" style="background-color: #1b1b1b">
                    <span class="text-secondary">Data</span>
                    <span class="float-end">{{ Carbon::parse($transaction->date)->translatedFormat('d F Y, H:i') }}</span>
                </li>
                <li class="list-group-item p-3 text-white" style="background-color: #1b1b1b">
                    <span class="text-secondary">Stato</span>
                    <span class="float-end">{{ $transaction->payed === 1 ? 'Pagata' : 'Non Pagata' }}</span>
                </li>
                <li class="list-group-item p-3 text-white" style="background-color: #1b1b1b">
                    <span class="text-secondary">Note</span>
                    <span class="float-end">{{ $transaction->note ?? '//'}}</span>
                </li>
            </ul>
        </div>
        <button class="btn btn-black mt-4 rounded-5 text-white" style="background-color: #1b1b1b"><i class="bi bi-pen fs-4"></i></button>
        @if(!$transaction->payed)
            <button class="btn btn-black mt-4 rounded-5 text-white" style="background-color: #1b1b1b"><i class="bi bi-check2-all fs-4"></i></button>
        @endif
    </div>
@endsection

