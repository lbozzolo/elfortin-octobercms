<?php namespace Vertice\Productos\Models;

use Model;

/**
 * Model
 */
class Laboratorio extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'vertice_productos_laboratorios';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'productos' => 'Vertice\Productos\Models\Producto'
    ];

}
