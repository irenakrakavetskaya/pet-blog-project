<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class City
 * @package App\Models
 * @version May 4, 2018, 2:49 pm UTC
 *
 * @property \App\Models\Country country
 * @property \Illuminate\Database\Eloquent\Collection Duration
 * @property \Illuminate\Database\Eloquent\Collection galleries
 * @property \Illuminate\Database\Eloquent\Collection Hotel
 * @property \Illuminate\Database\Eloquent\Collection Site
 * @property string name
 * @property string name_en
 * @property integer country_id
 * @property string general_information
 * @property string personal_opinion
 */
class City extends Model
{

    public $table = 'cities';
    
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';

    public $timestamps = false;

    public $fillable = [
        'name',
        'name_en',
        'country_id',
        'general_information',
        'personal_opinion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'name_en' => 'string',
        'country_id' => 'integer',
        'general_information' => 'string',
        'personal_opinion' => 'string'
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
    public function country()
    {
        return $this->belongsTo(\App\Models\Country::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function durations()
    {
        return $this->hasMany(\App\Models\Duration::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function hotels()
    {
        return $this->hasMany(\App\Models\Hotel::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sites()
    {
        return $this->hasMany(\App\Models\Site::class);
    }
}
