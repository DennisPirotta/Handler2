@extends('layouts.app')
@section('content')
    {{-- <x-toast :message="'Hello world! This is a toast message.'" :icon="'fa-info-circle'"></x-toast> --}}
    <div class="container p-3 bg-dark">
        <h6 class="mt-1 mb-2 text-opacity-25 text-white">Disponibilità</h6>
        <div class="card text-white bg-darker">
            <div class="card-body row">
                <div class="col-8 d-flex align-items-center">
                    <span class="m-0 h2" id="cash">{{ $cash }}</span>
                    <span class="m-0 h6 d-none" id="hidden_cash"></span>
                    <i class="bi bi-currency-euro fs-4"></i>
                </div>
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <i class="bi bi-eye mx-auto fs-4 text-primary" id="eye" style="cursor: pointer"></i>
                    <button class="btn btn-white bg-white p-2 btn-floating"><i class="bi bi-plus-lg text-primary fs-6"></i> </button>
                </div>
            </div>
        </div>
        <h6 class="mt-4 mb-2 text-opacity-25 text-white">Movimenti</h6>
        <div class="card bg-darker">
            <ul class="list-group">
                @foreach($latest as $transaction)
                    <li class="list-group-item p-3 text-white bg-darker">
                        <x-transaction-card :transaction="$transaction" :islist="true"></x-transaction-card>
                    </li>
                @endforeach
                <li class="list-group-item p-2 text-white text-center bg-darker">
                    <a class="text-primary fw-bold" href="{{ route('transactions.index') }}">Vedi Tutti</a>
                </li>
            </ul>
        </div>

    </div>
    <script>
        $(() => {
            for (let i = 0; i < $('#cash').text().length; i++) {
                $('#hidden_cash').append('&#9898;')
            }
        })
        $('#eye').click((e) => {
            let target = $(e.target)
            let cash = $('#cash')
            let hidden = $('#hidden_cash')
            if (target.hasClass('bi-eye')){
                target.removeClass('bi-eye')
                target.addClass('bi-eye-slash')
                cash.addClass('d-none')
                hidden.removeClass('d-none')
            }
            else {
                target.addClass('bi-eye')
                target.removeClass('bi-eye-slash')
                cash.removeClass('d-none')
                hidden.addClass('d-none')
            }
        })
    </script>
@endsection
