<?php namespace Vertice\Productos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVerticeProductosPrincipioactivo extends Migration
{
    public function up()
    {
        Schema::create('vertice_productos_principioactivo', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vertice_productos_principioactivo');
    }
}
