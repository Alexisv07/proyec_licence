<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class School
 *
 * @property $id
 * @property $nombre
 * @property $tipolicencia
 * @property $uso
 * @property $preciobase
 * @property $incremento
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class School extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'tipolicencia' => 'required',
		'uso' => 'required',
		'preciobase' => 'required',
		'incremento' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','tipolicencia','uso','preciobase','incremento','total'];



}
