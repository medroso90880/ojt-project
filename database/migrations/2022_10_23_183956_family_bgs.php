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
        Schema::create('family_bgs', function (Blueprint $table)
        {
            $table->foreignId('id');
            $table->string('name_father');
            $table->string('name_mother');
            $table->integer('age_father');
            $table->integer('age_mother');
            $table->string('educational_attain_father');
            $table->string('educational_attain_mother');
            $table->string('school_attended_father');
            $table->string('school_attended_mother');
            $table->string('occupation_father');
            $table->string('occupation_mother');
            $table->string('company_add_father');
            $table->string('company_add_mother');
            $table->string('contact_number_father');
            $table->string('contact_number_mother');
            $table->string('marital_status');
            $table->string('name_sibling')->nullable();
            $table->integer('age_sibling')->nullable();
            $table->string('educational_attain_sibling')->nullable();
            $table->string('school_attended_sibling')->nullable();
            $table->string('occupation_sibling')->nullable();
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
        Schema::dropIfExists('family_bgs');
    }
};
