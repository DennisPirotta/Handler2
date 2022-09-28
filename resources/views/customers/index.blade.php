@extends('layouts.app')
@section('content')
    <div class="container shadow-sm p-3 bg-dark">
        <div class="accordion accordion-borderless" id="accordionFlushExampleX">
            <div class="accordion-item" style="background-color: #1b1b1b">
                <h2 class="accordion-header" id="flush-headingOneX">
                    <button class="accordion-button text-white collapsed" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#flush-collapseOneX" aria-expanded="false"
                            aria-controls="flush-collapseOneX"
                            style="background-color: #1b1b1b"
                    >
                        <i class="bi bi-plus-circle me-2"></i>
                        Aggiungi
                    </button>
                </h2>
                <div id="flush-collapseOneX" class="accordion-collapse collapse"
                     aria-labelledby="flush-headingOneX" data-mdb-parent="#accordionFlushExampleX">
                    <div class="accordion-body">
                        <form action="{{ route('customers.store') }}" method="post">
                            @csrf
                            <div class="form-outline mb-3">
                                <input type="text" id="name" name="name" class="form-control bg-dark text-white" />
                                <label class="form-label text-white" for="name">Nome</label>
                            </div>
                            <button type="submit" class="btn text-white bg-dark w-100">Salva</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr">
        @foreach($customers->reverse() as $customer)
            <x-customer-card :customer="$customer"></x-customer-card>
        @endforeach
    </div>

@endsection