<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Gaji
 * @package App\Models
 * @version December 31, 2022, 3:34 pm UTC
 *
 * @property integer $nip
 * @property string $nama_pegawai
 * @property string $total_gaji
 * @property string $nomor_rekening
 * @property string $alamat
 */
class Gaji extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'gajis';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nip',
        'nama_pegawai',
        'total_gaji',
        'nomor_rekening',
        'alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nip' => 'integer',
        'nama_pegawai' => 'string',
        'total_gaji' => 'string',
        'nomor_rekening' => 'string',
        'alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nip' => 'required',
        'nama_pegawai' => 'required',
        'total_gaji' => 'required',
        'nomor_rekening' => 'required',
        'alamat' => 'required'
    ];

    
}
