<?php

namespace App\Repositories;

use App\Models\Kelurahan;
use App\Repositories\BaseRepository;

/**
 * Class KelurahanRepository
 * @package App\Repositories
 * @version February 28, 2023, 6:37 pm UTC
*/

class KelurahanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_kelurahan',
        'kecamatan_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Kelurahan::class;
    }
}
