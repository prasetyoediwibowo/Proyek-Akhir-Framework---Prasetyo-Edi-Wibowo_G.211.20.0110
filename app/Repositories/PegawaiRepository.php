<?php

namespace App\Repositories;

use App\Models\Pegawai;
use App\Repositories\BaseRepository;

/**
 * Class PegawaiRepository
 * @package App\Repositories
 * @version December 29, 2022, 6:39 am UTC
*/

class PegawaiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nip',
        'nama',
        'tempat_lahir',
        'jabatan',
        'alamat',
        'nomor_telepon'
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
        return Pegawai::class;
    }
}
