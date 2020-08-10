<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_proyek', function (Blueprint $table) {
            $table->unsignedBigInteger('proyek_id')->nullable();
            $table->unsignedBigInteger('karyawan_id')->nullable();
            $table->timestamps();
            $table->primary(['proyek_id', 'karyawan_id']);
            $table->foreign('proyek_id')->references('id')->on('proyek');
            $table->foreign('karyawan_id')->references('id')->on('karyawan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_proyek');
    }
}
