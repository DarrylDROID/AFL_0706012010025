<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    
    protected $table = "car";
    protected $fillable = ['code', 'car', 'type', 'merk', 'engine', 'price'];

    public function brand() 
    {
        return $this->belongsTo(Brand::class, 'merk', 'brand_code');
    }
}
