<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pegawai
 * @package App\Models
 * @version December 29, 2022, 6:39 am UTC
 *
 * @property integer $nip
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $jabatan
 * @property string $alamat
 * @property string $nomor_telepon
 */
class Pegawai extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'pegawais';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nip',
        'nama',
        'tempat_lahir',
        'jabatan',
        'alamat',
        'nomor_telepon'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nip' => 'integer',
        'nama' => 'string',
        'tempat_lahir' => 'string',
        'jabatan' => 'string',
        'alamat' => 'string',
        'nomor_telepon' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nip' => 'required',
        'nama' => 'required',
        'tempat_lahir' => 'required',
        'jabatan' => 'required',
        'alamat' => 'required',
        'nomor_telepon' => 'required'
    ];

    
}
