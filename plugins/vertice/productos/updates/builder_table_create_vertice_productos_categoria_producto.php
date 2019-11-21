<?php namespace Vertice\Productos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVerticeProductosCategoriaProducto extends Migration
{
    public function up()
    {
        Schema::create('vertice_productos_categoria_producto', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('categoria_id');
            $table->integer('producto_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vertice_productos_categoria_producto');
    }
}
