<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockMovement extends Model
{
    protected $fillable = [
        'medicine_id',
        'user_id',
        'type',
        'qty',
        'description',
    ];
}
