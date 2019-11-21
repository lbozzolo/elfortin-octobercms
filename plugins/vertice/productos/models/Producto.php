<?php namespace Vertice\Productos\Models;

use Model;
use Vertice\Productos\Models\Laboratorio as Laboratorio;

/**
 * Model
 */
class Producto extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'vertice_productos_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public $attachOne = [

        'poster' => 'System\Models\File'

    ];

    public $attachMany = [

        'product_gallery' => 'System\Models\File'

    ];

    public $belongsTo = [
        'laboratorio' => 'Vertice\Productos\Models\Laboratorio',
        'principio' => 'Vertice\Productos\Models\PrincipioActivo'
    ];

    public $belongsToMany = [
        'categorias' => [
            'Vertice\Productos\Models\Categoria',
            'table' => 'vertice_productos_categoria_producto',
            'order' => 'name'
        ]
    ];

}
