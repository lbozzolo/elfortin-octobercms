<?php namespace Vertice\Productos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteVerticeProductosCategoriaProducto extends Migration
{
    public function up()
    {
        Schema::dropIfExists('vertice_productos_categoria_producto');
    }
    
    public function down()
    {
        Schema::create('vertice_productos_categoria_producto', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('categoria_id');
            $table->integer('producto_id');
        });
    }
}
