<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

class CreateAcontecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acontecimiento', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 30)->nullable();
            $table->string('nombre', 50)->nullable();
            $table->longText('descripcion')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acontecimientos');
    }
}
