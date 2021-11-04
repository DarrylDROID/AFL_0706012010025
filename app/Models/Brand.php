<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table ="brand";
    protected $keyType ='string';
    protected $primaryKey = 'brand_code';
    protected $fillable = ['brand_code', 'brand_name', 'founder', 'date_found', 'headquarters', 'image'];

    public function cars()
    {
        return $this->hasMany(Car::class, 'merk', 'brand_code');
    } 
}