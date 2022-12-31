<?php

namespace App\Repositories;

use App\Models\Gaji;
use App\Repositories\BaseRepository;

/**
 * Class GajiRepository
 * @package App\Repositories
 * @version December 31, 2022, 3:34 pm UTC
*/

class GajiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nip',
        'nama_pegawai',
        'total_gaji',
        'nomor_rekening',
        'alamat'
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
        return Gaji::class;
    }
}
