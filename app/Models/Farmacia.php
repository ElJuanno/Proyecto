<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Farmacia
 *
 * @property $id
 * @property $id_provedor
 * @property $direccion
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Provedore $provedore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Farmacia extends Model
{
    
    static $rules = [
		'id_provedor' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_provedor','direccion','telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function provedore()
    {
        return $this->hasOne('App\Models\Provedore', 'id', 'id_provedor');
    }
    

}
