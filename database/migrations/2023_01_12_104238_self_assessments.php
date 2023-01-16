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
        Schema::create('self_assessments', function (Blueprint $table) {
            $table->foreignId('id');
            $table->integer('physical_well_being');
            $table->integer('mental_comprehension');
            $table->integer('speech_english');
            $table->integer('written_communication_skills');
            $table->integer('personality');
            $table->integer('character');
            $table->string('general_make_up');
            $table->string('statement_1');
            $table->string('statement_2');
            $table->string('statement_3');
            $table->string('statement_4');
            $table->string('statement_5');
            $table->string('statement_6');
            $table->string('statement_7');
            $table->string('statement_8');
            $table->string('statement_9'); 
            $table->string('statement_10');
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
        //
    }
};
