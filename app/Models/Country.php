<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Country
 * @package App\Models
 * @version May 4, 2018, 2:28 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection City
 * @property \Illuminate\Database\Eloquent\Collection Duration
 * @property \Illuminate\Database\Eloquent\Collection galleries
 * @property string name
 * @property string name_en
 */
class Country extends Model
{

    public $table = 'countries';
    
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'name_en'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'name_en' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cities()
    {
        return $this->hasMany(\App\Models\City::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function durations()
    {
        return $this->hasMany(\App\Models\Duration::class);
    }
}
