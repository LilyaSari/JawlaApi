<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Country;
use App\Models\Place;


class City extends Model
{
    use CrudTrait;
    protected $fillable = [
        'name',
        'description',
        'longitude',
        'latitude',
        'country_id',
        'thumbnail'
    ];


    public function places()
    {
        return $this->hasMany(Place::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
