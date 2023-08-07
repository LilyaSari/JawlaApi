<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use App\Models\City;

class Country extends Model
{
    use CrudTrait;
    protected $fillable = [
        'name',
        'iso_code',
        'population',
        'area',
        'currency',
        'language',
        'flag',
        'capital_id',
    ];

    public function capital()
    {
        return $this->belongsTo(City::class, 'capital_id');
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
