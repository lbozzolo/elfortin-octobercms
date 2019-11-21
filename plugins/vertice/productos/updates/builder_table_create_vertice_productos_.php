<?php namespace Vertice\Productos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVerticeProductos extends Migration
{
    public function up()
    {
        Schema::create('vertice_productos_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('principio_activo')->nullable();
            $table->string('presentacion')->nullable();
            $table->string('pdf_file')->nullable();
            $table->text('caracteristicas')->nullable();
            $table->integer('laboratorio_id')->nullable()->unsigned();
            $table->string('code')->nullable();
            $table->integer('price')->nullable();
            $table->integer('highlight')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vertice_productos_');
    }
}
