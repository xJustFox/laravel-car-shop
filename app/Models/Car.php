<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['model', 'year', 'color', 'kilometers', 'price', 'transmission', 'fuel_type', 'engine_size', 'description', 'brand_id', 'image'];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function optional()
    {
        return $this->belongsToMany(Optional::class);
    }
}
