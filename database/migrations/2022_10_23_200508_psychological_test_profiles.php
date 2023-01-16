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
        Schema::create('psychological_test_profiles', function (Blueprint $table) {
            $table->ForeignId('id');
            $table->longText('DIQ');
            $table->longText('raw_score');
            $table->longText('percentile');
            $table->longText('VA');
            $table->longText('NA');
            $table->longText('VR_NA');
            $table->longText('AR');
            $table->longText('MR');
            $table->longText('SR');
            $table->longText('S');
            $table->longText('L');
            $table->longText('delay_avoidance');
            $table->longText('work_methods');
            $table->longText('study_habits');
            $table->longText('teacher_approval');
            $table->longText('educ_acceptance');
            $table->longText('study_attitude');
            $table->longText('study_orientation');
            $table->integer('reserve');
            $table->integer('less_intelligent');
            $table->integer('affected_by_feelings');
            $table->integer('phlegmatic');
            $table->integer('obedient');
            $table->integer('disregards_rules');
            $table->integer('shy');
            $table->integer('tough_minded');
            $table->integer('sober');
            $table->integer('vigorous');
            $table->integer('self_assured');
            $table->integer('group_dependent');
            $table->integer('casual');
            $table->integer('relaxed');
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
        Schema::dropIfExists('psychological_test_profiles');
    }
};