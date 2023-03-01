<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Warga
 * @package App\Models
 * @version February 28, 2023, 9:34 pm UTC
 *
 * @property \App\Models\Kecamatan $kecamatan
 * @property \App\Models\Kelurahan $kelurahan
 * @property \App\Models\User $users
 * @property string $nama
 * @property string $nik
 * @property string $alamat
 * @property string $rw
 * @property string $rt
 * @property string $nohp
 * @property integer $kecamatan_id
 * @property integer $kelurahan_id
 * @property integer $users_id
 */
class Warga extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'warga';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'nik',
        'jenis_kelamin',
        'alamat',
        'rw',
        'rt',
        'nohp',
        'kecamatan_id',
        'kelurahan_id',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'nik' => 'string',
        'jenis_kelamin' => 'string',
        'alamat' => 'string',
        'rw' => 'string',
        'rt' => 'string',
        'nohp' => 'string',
        'kecamatan_id' => 'integer',
        'kelurahan_id' => 'integer',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required|string|max:255',
        'nik' => 'required|string|max:16',
        'jenis_kelamin' => 'required|string',
        'alamat' => 'required|string',
        'rw' => 'required|string|max:255',
        'rt' => 'required|string|max:255',
        'nohp' => 'required|string|max:255',
        'kecamatan_id' => 'required|integer',
        'kelurahan_id' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function kecamatan()
    {
        return $this->belongsTo(\App\Models\Kecamatan::class, 'kecamatan_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function kelurahan()
    {
        return $this->belongsTo(\App\Models\Kelurahan::class, 'kelurahan_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function users()
    {
        return $this->belongsTo(\App\Models\User::class, 'users_id');
    }
}
