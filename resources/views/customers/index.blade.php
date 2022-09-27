{{--@php
    use App\Models\Transaction;
    use Carbon\Carbon;
    $user = auth()->user();
    Carbon::setLocale('it')
@endphp
@extends('layouts.app')
@section('content')

    <div class="container shadow-sm p-5 my-md-5">
        <div class="d-md-flex">
            <h2>Clienti</h2>
            <button class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#addModal"><i
                        class="bi bi-plugin"></i> Aggiungi cliente
            </button>
        </div>
        <hr>
        <div class="alert alert-primary text-center" role="alert">
            Debito totale di <b id="debit_tot"></b> <i class="bi bi-currency-euro"></i>
        </div>
        <hr>
        <div class="col-sm-12 col-md-12 col-xl-12 text-center table-responsive fixed-header-container">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Cliente</th>
                    <th scope="col"><span id="order" style="cursor: pointer">Debiti <i class="bi bi-caret-down-fill fs-6" id="arrow"></i></span></th>
                    <th scope="col">Azioni</th>
                </tr>
                </thead>
                <tbody class="align-middle">
                @foreach($customers as $customer)
                    @php
                        $debit = 0;
                        $transactions = Transaction::where('customer_id',$customer->id)->get();
                        foreach ($transactions as $transaction) {
                            if(!$transaction->payed) $debit += $transaction->price;
                        }
                    @endphp
                    <tr>
                        <th scope="row">{{ $customer->name }}</th>
                        <td class="debit">{{ $debit }} <i class="bi bi-currency-euro"></i></td>
                        <td>
                            <a href="{{ route('transactions.index') }}/?customer={{ htmlspecialchars($customer->id) }}">Visualizza
                                Transazioni</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Aggiungi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('customers.store') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-rolodex fs-4"></i></span>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Nome">
                                    <label for="name">Nome</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                <button type="submit" class="btn btn-primary">Salva</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <script>
        $(()=>{
            $('#order').click(function(){
                $('#arrow').toggleClass("bi-caret-up-fill")
                $('#arrow').toggleClass("bi-caret-down-fill")
                let table = $(this).parents('table').eq(0)
                let rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
                this.asc = !this.asc
                if (!this.asc){rows = rows.reverse()}
                for (let i = 0; i < rows.length; i++){table.append(rows[i])}
            })
            function comparer(index) {
                return function(a, b) {
                    let valA = getCellValue(a, index), valB = getCellValue(b, index)
                    return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB)
                }
            }
            function getCellValue(row, index){ return $(row).children('td').eq(index).text() }
            let total = 0
            $('.debit').each((index,element) => {
                total += parseInt($(element).text())
            })
            $('#debit_tot').text(total)
        })
    </script>
@endsection
--}}
@extends('layouts.app')
@section('content')
    <div class="container shadow-sm p-3 bg-dark">
        <button class="btn btn-dark btn-sq-responsive rounded-3 p-3" style="background-color: #1b1b1b"><i class="bi bi-plus-circle"></i></button>
        <hr class="hr">
        @foreach($customers as $customer)
            <x-customer-card :customer="$customer"></x-customer-card>
        @endforeach
    </div>

@endsection