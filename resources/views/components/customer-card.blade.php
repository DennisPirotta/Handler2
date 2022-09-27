@php
    use App\Models\Transaction;
    $debit = 0;
    $transactions = Transaction::where('customer_id',$customer->id)->where('user_id',auth()->id())->get();
    foreach ($transactions as $transaction) {
        if ($transaction->payed){
            $debit += $transaction->price;
        }
    }
@endphp
<div class="card text-white mb-2" style="background-color: #1b1b1b">
    <div class="card-body d-flex">
        <div class="float-start">
            {{ $customer->name }}
            <br>
            <span class="text-secondary small">Debito di <span class="text-white fs-6">{{ $debit}} <i class="bi bi-currency-euro"></i></span></span>
        </div>
        <div class="ms-auto float-end align-self-center">
            <a href="{{ route('transactions.index') }}?customer={{ $customer->id }}&&payed=1">
                <i class="bi bi-eye fs-4 me-2 text-primary"></i>
            </a>
        </div>
    </div>
</div>