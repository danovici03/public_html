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
            $table->text('adress')->nullable();
            $table->text('city')->nullable();
            $table->text('county')->nullable();
            $table->text('phone')->nullable();
            $table->text('specialization')->nullable();
            $table->text('profile_image')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->text('ci_doctor')->nullable();
            $table->text('cuim_doctor')->nullable();
            $table->text('avis_libera_practica')->nullable();
            $table->text('parafa_semnatura')->nullable();
            $table->text('working_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
