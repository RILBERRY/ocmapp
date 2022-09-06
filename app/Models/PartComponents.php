<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartComponents extends Model
{
    use HasFactory;
    protected $fillable = [
        'part_number',
        'description',
        'required_qty',
        'unit_price',
        'img_url',
        'part_id',
    ];
}
