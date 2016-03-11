<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsletterSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletter_subscribers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('registration_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->boolean('unsubscribe')->default(0);
            $table->string('mailchimp_list_user_id');
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
        Schema::drop('newsletter_subscribers');
    }
}
