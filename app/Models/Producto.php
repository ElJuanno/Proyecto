<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $precio_venta
 * @property $precio_compra
 * @property $f_caducidad
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @property Provedore[] $provedores
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'precio_venta' => 'required',
		'precio_compra' => 'required',
		'f_caducidad' => 'required',
		'stock' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','precio_venta','precio_compra','f_caducidad','stock'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function provedores()
    {
        return $this->hasMany('App\Models\Provedore', 'id_producto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'id_producto', 'id');
    }
    

}
