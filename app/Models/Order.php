<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['noinvoice','customer_id', 'customer_name', 'customer_city', 'customer_subdistrict', 'customer_address' , 'expedition', 'payment_method', 'paid_at', 'ongkir', 'amount' ];

}
