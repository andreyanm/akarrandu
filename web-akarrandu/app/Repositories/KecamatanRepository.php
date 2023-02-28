<?php

namespace App\Repositories;

use App\Models\Kecamatan;
use App\Repositories\BaseRepository;

/**
 * Class KecamatanRepository
 * @package App\Repositories
 * @version February 28, 2023, 6:36 pm UTC
*/

class KecamatanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_kecamatan'
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
        return Kecamatan::class;
    }
}
