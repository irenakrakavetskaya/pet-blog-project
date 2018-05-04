<?php

namespace App\Repositories;

use App\Models\Site;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SiteRepository
 * @package App\Repositories
 * @version May 4, 2018, 2:38 pm UTC
 *
 * @method Site findWithoutFail($id, $columns = ['*'])
 * @method Site find($id, $columns = ['*'])
 * @method Site first($columns = ['*'])
*/
class SiteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Site::class;
    }
}
