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
        Schema::create('health_physical_devs', function (Blueprint $table){
            $table->foreignId('id');
            $table->string('height');
            $table->string('weight');
            $table->string('sight');
            $table->string('hearing');
            $table->string('speech');
            $table->string('general_health');
            $table->string('question_a1');
            $table->string('question_a2')->nullable();
            $table->string('question_b1');
            $table->string('question_b2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('health_physical_devs');
    }
};
