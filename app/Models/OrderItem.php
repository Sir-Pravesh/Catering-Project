<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $table = 'order_item';
    protected $fillable = [
        'order_id',
        'item_name',
        'category',
        'rate',
        'quantity',
        'total',
    ];
}