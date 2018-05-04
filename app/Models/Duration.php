<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Duration
 * @package App\Models
 * @version May 4, 2018, 2:31 pm UTC
 *
 * @property \App\Models\City city
 * @property \App\Models\Country country
 * @property \Illuminate\Database\Eloquent\Collection galleries
 * @property date date_from
 * @property date date_till
 * @property decimal expenses
 * @property integer country_id
 * @property integer city_id
 */
class Duration extends Model
{

    public $table = 'durations';
    
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';

    public $timestamps = false;

    public $fillable = [
        'date_from',
        'date_till',
        'expenses',
        'country_id',
        'city_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date_from' => 'date',
        'date_till' => 'date',
        'country_id' => 'integer',
        'city_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function city()
    {
        return $this->belongsTo(\App\Models\City::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function country()
    {
        return $this->belongsTo(\App\Models\Country::class);
    }
}
