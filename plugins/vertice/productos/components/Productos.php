<?php namespace Vertice\Productos\Components;

use Cms\Classes\ComponentBase;
use Vertice\Productos\Models\Producto;

class Productos extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Lista',
            'description' => 'Lista de productos'
        ];
    }

    public function defineProperties()
    {
        return [
            'results' => [
                'title' => 'Number of products',
                'description' => 'How many products do you want to display?',
                'default' => 0,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Only number allowed'
            ],

            'sortOrder' => [
                'title' => 'Sort Products',
                'description' => 'Sort those products',
                'type' => 'dropdown',
                'default' => 'id asc'
            ],
        ];
    }

    public function getSortOrderOptions()
    {
        return [
            'name asc' => 'Name( ascending)',
            'name desc' => 'Name( descending)',
            'id asc' => 'Date( ascending)',
            'id desc' => 'Date( descending)',
        ];
    }

    public function onRun()
    {
        $this->productos = $this->loadProductos();
    }

    protected function loadProductos()
    {
        $query = Producto::all();
        $perPage = 15;

        if($this->param('slug')) {
            $query = Producto::whereHas('categorias', function ($query) {
                $query->where('slug', 'like', $this->param('slug'));
            });
        }

        if ($this->property('sortOrder') == 'name asc')
            $query->orderBy('name');

        if ($this->property('sortOrder') == 'name desc')
            $query->orderBy('name', 'desc');

        if ($this->property('sortOrder') == 'id asc')
            $query->orderBy('id');

        if ($this->property('sortOrder') == 'id desc')
            $query->orderBy('id', 'desc');

        return $query->paginate($perPage);
    }

    public $productos;

}