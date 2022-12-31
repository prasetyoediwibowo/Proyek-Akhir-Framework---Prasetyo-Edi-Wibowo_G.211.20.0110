<?php

namespace App\Repositories;

use App\Models\Presensi;
use App\Repositories\BaseRepository;

/**
 * Class PresensiRepository
 * @package App\Repositories
 * @version December 29, 2022, 6:56 am UTC
*/

class PresensiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_presensi',
        'nip',
        'tanggal',
        'status',
        'keterangan'
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
        return Presensi::class;
    }
}
