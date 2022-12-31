<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Presensi
 * @package App\Models
 * @version December 29, 2022, 6:56 am UTC
 *
 * @property integer $id_presensi
 * @property integer $nip
 * @property string $tanggal
 * @property string $status
 * @property string $keterangan
 */
class Presensi extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'presensis';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_presensi',
        'nip',
        'tanggal',
        'status',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_presensi' => 'integer',
        'nip' => 'integer',
        'tanggal' => 'string',
        'status' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_presensi' => 'required',
        'nip' => 'required',
        'tanggal' => 'required',
        'status' => 'required',
        'keterangan' => 'required'
    ];

    
}
