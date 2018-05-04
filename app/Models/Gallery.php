<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Gallery
 * @package App\Models
 * @version May 4, 2018, 2:44 pm UTC
 *
 * @property \App\Models\Hotel hotel
 * @property \App\Models\Site site
 * @property \Illuminate\Database\Eloquent\Collection durations
 * @property string name
 * @property integer site_id
 * @property integer hotel_id
 */
class Gallery extends Model
{

    public $table = 'galleries';
    
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';

    public  $timestamps=false;

    public $fillable = [
        'name',
        'site_id',
        'hotel_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'site_id' => 'integer',
        'hotel_id' => 'integer'
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
    public function hotel()
    {
        return $this->belongsTo(\App\Models\Hotel::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function site()
    {
        return $this->belongsTo(\App\Models\Site::class);
    }
}
