<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['model', 'brand', 'year', 'color', 'kilometers', 'price', 'transmission', 'fuel_type', 'engine_size', 'description'];

    public function optional()
    {
        return $this->belongsToMany(Optional::class);
    }
}
