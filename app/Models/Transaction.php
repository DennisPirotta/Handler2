<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'price','payed','customer_id','user_id','type','date'
    ];

    public function scopeFilter($query, array $filters): void
    {
        if (isset($filters['customer'])) {
            $query->where('customer_id', request('customer'));
        }
        if (isset($filters['payed'])) {
            $query->where('payed', (bool)request('payed'));
        }
    }

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
