<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warga extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'warga';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_kecamatan',
        'nik',
        'nohp',
        'alamat',
        'kecamatan_id',
        'kelurahan_id',
        'rt',
        'rw',
        'users_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'nik' => 'integer',
        'nohp' => 'string',
        'alamat' => 'string',
        'kecamatan_id' => 'integer',
        'kelurahan_id' => 'integer',
        'rt' => 'string',
        'rw' => 'string',
        'users_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function kelurahans()
    {
        return $this->hasOne(\App\Models\Kelurahan::class, 'kelurahan_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function kecamatans()
    {
        return $this->hasOne(\App\Models\Kecamatan::class, 'kecamatan_id');
    }

    public function users()
    {
        return $this->belongsTo(\App\Models\User::class, 'users_id');
    }
}
