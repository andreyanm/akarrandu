<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Kecamatan
 * @package App\Models
 * @version February 28, 2023, 6:36 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $kelurahans
 * @property \Illuminate\Database\Eloquent\Collection $wargas
 * @property string $nama_kecamatan
 */
class Kecamatan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'kecamatan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_kecamatan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_kecamatan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_kecamatan' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function kelurahans()
    {
        return $this->hasMany(\App\Models\Kelurahan::class, 'kecamatan_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function wargas()
    {
        return $this->hasMany(\App\Models\Warga::class, 'kecamatan_id');
    }
}
