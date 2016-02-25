<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->string('phone');
            $table->string('email');
            $table->string('gender');
            $table->date('birthdate');
            $table->string('graduation_year');
            $table->string('high_school_state');
            $table->string('high_school_name');
            $table->string('guardian_1_first_name');
            $table->string('guardian_1_last_name');
            $table->string('guardian_1_email');
            $table->string('guardian_1_phone');
            $table->string('guardian_2_first_name')->nullable();
            $table->string('guardian_2_last_name')->nullable();
            $table->string('guardian_2_email')->nullable();
            $table->string('guardian_2_phone')->nullable();
            $table->string('gpa')->nullable();
            $table->string('sat_score')->nullable();
            $table->string('act_score')->nullable();
            $table->string('position');
            $table->string('height');
            $table->string('weight');
            $table->string('twitter_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('snapchat_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->boolean('text_agreement');
            $table->boolean('event_waiver_agreement');
            $table->string('shirt_size');
            $table->string('hurdl_email')->nullable();
            $table->string('hurdl_film_link')->nullable();
            $table->string('registrant_verify');
            $table->string('coach_name');
            $table->string('coach_phone')->nullable();
            $table->string('coach_email')->nullable();
            $table->text('favorite_colleges')->nullable();
            $table->text('college_offers')->nullable();
            $table->text('offensive_stats')->nullable();
            $table->text('defensive_stats')->nullable();
            $table->text('postseason_honors')->nullable();
            $table->integer('jersey_number')->nullable();
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
        Schema::drop('registrations');
    }
}
