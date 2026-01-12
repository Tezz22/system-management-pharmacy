<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    protected $fillable = [
        'category_id',
        'supplier_id',
        'name',
        'code',
        'price',
        'unit',
    ];
}
