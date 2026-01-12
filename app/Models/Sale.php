<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function SaleItems()
    {
        return $this->hasMany(SaleItem::class);
    }
    protected $fillable = [
        'user_id',
        'total_price',
        'paid_amount',
        'change_amount',
    ];
}
