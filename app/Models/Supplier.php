<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }
    protected $fillable = ['name', 'contact_info'];
}
