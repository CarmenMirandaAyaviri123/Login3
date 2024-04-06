<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('acontecimiento', function (Blueprint $table) {
            $table->unsignedBigInteger('id_reserva');
            $table->foreign('id_reserva')
                ->references('id')
                ->on('reserva')
                ->onDelete('cascade');
            }    
        );
        Schema::table('estado_reserva', function (Blueprint $table) {
            $table->unsignedBigInteger('id_reserva');
            $table->foreign('id_reserva')
                ->references('id')
                ->on('reserva')
                ->onDelete('cascade');
            }    
        );
        
        Schema::table('ambientes', function (Blueprint $table) {
            $table->unsignedBigInteger('id_departamento')->nullable();
            $table->foreign('id_departamento')
                ->references('id')
                ->on('departamentos')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_tipo_amb')->nullable();
            $table->foreign('id_tipo_amb')
                ->references('id')
                ->on('tipo_ambientes')
                ->onDelete('cascade');
            }    
        );

        Schema::table('prestamo_utilitario', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ambiente')->nullable();
            $table->foreign('id_ambiente')
                ->references('id')
                ->on('ambientes')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_utilitario')->nullable();
            $table->foreign('id_utilitario')
                ->references('id')
                ->on('utilitarios')
                ->onDelete('cascade');
            }    
        );

        Schema::table('horario', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ambiente')->nullable();
            $table->foreign('id_ambiente')
                ->references('id')
                ->on('ambientes')
                ->onDelete('cascade');
            }    
        );

        Schema::table('rol', function (Blueprint $table) {
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuario')
                ->onDelete('cascade');
            }    
        );

        Schema::table('rol_permisos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_rol')->nullable();
            $table->foreign('id_rol')
                ->references('id')
                ->on('rol')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_permiso')->nullable();
            $table->foreign('id_permiso')
                ->references('id')
                ->on('permisos')
                ->onDelete('cascade');
            }    
        );


        Schema::table('usuario_materias', function (Blueprint $table) {
            $table->unsignedBigInteger('id_materia')->nullable();
            $table->foreign('id_materia')
                ->references('id')
                ->on('materia')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuario')
                ->onDelete('cascade');
            }    
        );

        Schema::table('materia', function (Blueprint $table) {
            $table->unsignedBigInteger('id_reserva')->nullable();
            $table->foreign('id_reserva')
                ->references('id')
                ->on('reserva')
                ->onDelete('cascade');
            }    
        );


        Schema::table('usuario', function (Blueprint $table) {
            $table->unsignedBigInteger('id_rol')->nullable();
            $table->foreign('id_rol')
                ->references('id')
                ->on('rol')
                ->onDelete('cascade');
            }    
        );

        Schema::table('reserva', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ambiente')->nullable();
            $table->foreign('id_ambiente')
                ->references('id')
                ->on('ambientes')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger('id_acontecimiento')->nullable();
            $table->foreign('id_acontecimiento')
                ->references('id')
                ->on('acontecimiento')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_materia')->nullable();
            $table->foreign('id_materia')
                ->references('id')
                ->on('materia')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuario')
                ->onDelete('cascade');
            }
        );
    
        
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
