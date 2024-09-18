<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'geonameid',
        'longitude',
        'latitude'
    ];

    protected $primaryKey = 'geonameid';


    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'city_id', 'geonameid');
    }

}
