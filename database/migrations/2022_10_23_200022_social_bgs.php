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
        Schema::create('social_bgs', function (Blueprint $table){
            $table->foreignId('id');
            $table->integer('friends_same_age');
            $table->integer('friends_older');
            $table->integer('friends_younger');
            $table->integer('friends_boys');
            $table->integer('friends_girls');
            $table->integer('friend_other_school');
            $table->integer('friend_this_school');
            $table->longText('list_friends');
            $table->longText('list_talents_hobbies'); 
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
        Schema::dropIfExists('social_profiles');
    }
};
