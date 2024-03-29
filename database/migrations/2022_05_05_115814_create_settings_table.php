<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoIncrement();

            $table->string('title',100);
            $table->string('keywords',88)->nullable();
            $table->string('description')->nullable();
            $table->string('company',90)->nullable();
            $table->string('address',98)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('fax',20)->nullable();
            $table->string('email',75)->nullable();
            $table->string('smtpserver',75)->nullable();
            $table->string('smtpemail',75)->nullable();
            $table->string('smtppassword',15)->nullable();
            $table->integer('smtpport')->nullable();
            $table->string('facebook',100)->nullable();
            $table->string('instagram',100)->nullable();
            $table->string('twitter',100)->nullable();
            $table->text('aboutus')->nullable();
            $table->text('contact')->nullable();
            $table->text('references')->nullable();
            $table->string('icon',100)->nullable();
            $table->string('status',5)->default('False');
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
        Schema::dropIfExists('settings');
    }
}
