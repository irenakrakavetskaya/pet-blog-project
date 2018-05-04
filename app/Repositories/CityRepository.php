<?php

namespace App\Repositories;

use App\Models\City;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CityRepository
 * @package App\Repositories
 * @version May 4, 2018, 2:49 pm UTC
 *
 * @method City findWithoutFail($id, $columns = ['*'])
 * @method City find($id, $columns = ['*'])
 * @method City first($columns = ['*'])
*/
class CityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'name_en',
        'country_id',
        'general_information',
        'personal_opinion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return City::class;
    }
}
