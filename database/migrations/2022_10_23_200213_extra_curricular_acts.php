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
        Schema::create('extra_curricular_acts', function (Blueprint $table) {
            $table->foreignId('id');
            $table->string('position'); 
            $table->string('org_club'); 
            $table->string('activity'); 
            $table->string('extent_activity'); 
            $table->string('nature_1involvement'); 
            $table->string('award'); 
            $table->string('activity_competition');  
            $table->string('classification'); 
            $table->string('title'); 
            $table->string('sponsor'); 
            $table->string('scope'); 
            $table->string('nature_2involvement'); 
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
        Schema::dropIfExists('extra_curricular_acts');
    }
};
