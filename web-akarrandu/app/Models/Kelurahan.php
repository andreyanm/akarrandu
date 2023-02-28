<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Kelurahan
 * @package App\Models
 * @version February 28, 2023, 6:37 pm UTC
 *
 * @property \App\Models\Kecamatan $kecamatan
 * @property \Illuminate\Database\Eloquent\Collection $wargas
 * @property string $nama_kelurahan
 * @property integer $kecamatan_id
 */
class Kelurahan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'kelurahan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_kelurahan',
        'kecamatan_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_kelurahan' => 'string',
        'kecamatan_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_kelurahan' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'kecamatan_id' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function kecamatan()
    {
        return $this->belongsTo(\App\Models\Kecamatan::class, 'kecamatan_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function wargas()
    {
        return $this->hasMany(\App\Models\Warga::class, 'kelurahan_id');
    }
}
