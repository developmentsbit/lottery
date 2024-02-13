<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerTransaction extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    public function method()
    {
        return $this->belongsTo('App\Models\PaymentMethod','payment_type');
    }


}
