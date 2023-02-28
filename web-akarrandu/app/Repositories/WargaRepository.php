<?php

namespace App\Repositories;

use App\Models\Warga;
use App\Repositories\BaseRepository;

/**
 * Class WargaRepository
 * @package App\Repositories
 * @version February 28, 2023, 9:34 pm UTC
*/

class WargaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'nik',
        'alamat',
        'rw',
        'rt',
        'nohp',
        'kecamatan_id',
        'kelurahan_id',
        'users_id'
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
        return Warga::class;
    }
}
