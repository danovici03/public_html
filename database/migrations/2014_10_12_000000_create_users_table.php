<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('adress')->nullable();
            $table->string('city');
            $table->string('county');
            $table->string('phone');
            $table->string('specialization')->nullable();
            $table->string('image')->nullable();
            $table->string('date_of_birth');
            $table->string('ci_doctor');
            $table->string('cuim_doctor');
            $table->string('avis_libera_practica');
            $table->string('parafa_semnatura');
            $table->string('working_at');

        });
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
};
