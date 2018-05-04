<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Site
 * @package App\Models
 * @version May 4, 2018, 2:38 pm UTC
 *
 * @property \App\Models\City city
 * @property \Illuminate\Database\Eloquent\Collection durations
 * @property \Illuminate\Database\Eloquent\Collection Gallery
 * @property string name
 * @property string name_en
 * @property string address
 * @property string main_img
 * @property string introtext
 * @property string text
 * @property decimal price
 * @property string open_hours
 * @property integer city_id
 */
class Site extends Model
{

    public $table = 'sites';
    
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';

    public $timestamps = false;

    public $fillable = [
        'name',
        'name_en',
        'address',
        'main_img',
        'introtext',
        'text',
        'price',
        'open_hours',
        'city_id'
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
        'address' => 'string',
        'main_img' => 'string',
        'introtext' => 'string',
        'text' => 'string',
        'open_hours' => 'string',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function galleries()
    {
        return $this->hasMany(\App\Models\Gallery::class);
    }
}
