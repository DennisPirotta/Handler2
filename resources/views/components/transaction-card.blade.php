@if($islist ?? null)
    @if($transaction->payed)
        <i class="bi bi-check-circle text-success fs-5 me-2"></i>
    @else
        <i class="bi bi-exclamation-triangle text-danger fs-5 me-2"></i>
    @endif
    {{ $transaction->customer->name }}
    <div class="ms-auto float-end text-{{$transaction->type === 0 ? 'success' : 'danger'}}">
        {{$transaction->type === 0 ? '+' : '-' }} {{ $transaction->price}} <i class="bi bi-currency-euro"></i>
    </div>
@else
    <div class="card text-white" style="background-color: #1b1b1b">
        <div class="card-body">
            @if($transaction->payed)
                <i class="bi bi-check-circle text-success fs-5 me-2"></i>
            @else
                <i class="bi bi-exclamation-triangle text-danger fs-5 me-2"></i>
            @endif
            {{ $transaction->customer->name }}
            <div class="ms-auto float-end text-{{$transaction->type === 0 ? 'success' : 'danger'}}">
                {{$transaction->type === 0 ? '+' : '-'}} {{ $transaction->price}} <i class="bi bi-currency-euro"></i>
            </div>
        </div>
    </div>
@endif
