<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubExpedition extends Model
{
    use HasFactory;
    protected $fillable = ['expedition_id','name'];
}
