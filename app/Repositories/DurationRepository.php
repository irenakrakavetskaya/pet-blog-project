<?php

namespace App\Repositories;

use App\Models\Duration;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DurationRepository
 * @package App\Repositories
 * @version May 4, 2018, 2:31 pm UTC
 *
 * @method Duration findWithoutFail($id, $columns = ['*'])
 * @method Duration find($id, $columns = ['*'])
 * @method Duration first($columns = ['*'])
*/
class DurationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'date_from',
        'date_till',
        'expenses',
        'country_id',
        'city_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Duration::class;
    }
}
