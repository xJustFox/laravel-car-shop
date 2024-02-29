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
        Schema::create('car_optional', function (Blueprint $table) {
            $table->unsignedBigInteger('car_id');
            $table->foreign('car_id')->references('id')->on('cars')->cascadeOnDelete();

            $table->unsignedBigInteger('optional_id');
            $table->foreign('optional_id')->references('id')->on('optionals')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_optional');
    }
};
