<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use CrudTrait;
    protected $fillable = [
        'name',
        'description',
        'longitude',
        'latitude',
        'images',
        'address',
        'phone',
        'email',
        'website',
        'opening_hours',
        'price',
        'category',
        'city_id',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}

