<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogOrder extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','product_id', 'capital_price', 'price', 'qty', 'total' ];

}
