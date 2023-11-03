<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Provedore
 *
 * @property $id
 * @property $id_producto
 * @property $nombre_pro
 * @property $telefono
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Farmacia[] $farmacias
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Provedore extends Model
{
    
    static $rules = [
		'id_producto' => 'required',
		'nombre_pro' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_producto','nombre_pro','telefono','direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function farmacias()
    {
        return $this->hasMany('App\Models\Farmacia', 'id_provedor', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'id_producto');
    }
    

}
