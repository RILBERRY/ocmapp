<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    use HasFactory;
    protected $fillable = [
        'year',
        'designation',
        'is_supported',
        'model_type_id',
        'serial_number_range',
    ];
}
