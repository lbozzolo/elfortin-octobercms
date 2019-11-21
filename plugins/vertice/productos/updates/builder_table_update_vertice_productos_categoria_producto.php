<?php namespace Vertice\Productos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVerticeProductosCategoriaProducto extends Migration
{
    public function up()
    {
        Schema::rename('vertice_productos_categorias_productos', 'vertice_productos_categoria_producto');
    }
    
    public function down()
    {
        Schema::rename('vertice_productos_categoria_producto', 'vertice_productos_categorias_productos');
    }
}
