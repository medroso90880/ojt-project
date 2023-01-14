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
        Schema::create('educational_bgs', function (Blueprint $table){
            $table->foreignId('id');
            $table->string('school_last_attended');
            $table->string('public_or_private');
            $table->string('school_address');
            $table->string('coed_or_exclusive');
            $table->string('honors_or_awards_received');
            $table->string('secretarian_or_nonsect');

            $table->string('grade_level');
            $table->string('section');
            $table->string('scholarship_status');
            $table->string('academic_status');
        
            $table->string('subject_like_best');
            $table->string('subject_like_least');
            $table->string('subject_find_difficult');
            $table->string('subject_learned_most');
            $table->string('subject_learned_least');
            $table->string('subject_taught_best');
            $table->string('subject_taught_worst');
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
        Schema::dropIfExists('educational_bgs');
    }
};
