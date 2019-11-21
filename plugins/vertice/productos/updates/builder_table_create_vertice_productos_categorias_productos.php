<?php namespace Vertice\Productos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVerticeProductosCategoriasProductos extends Migration
{
    public function up()
    {
        Schema::create('vertice_productos_categorias_productos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('categoria_id')->unsigned();
            $table->integer('producto_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vertice_productos_categorias_productos');
    }
}
