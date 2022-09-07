<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotations extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'quote_no',
        'discount',
        'valid',
        'customer_id',
        'item_id',
    ];
}
