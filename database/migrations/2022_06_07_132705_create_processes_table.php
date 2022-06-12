<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('treatment_id');
            $table->integer('hekim_id');
            $table->integer('price');
            $table->float('amount');
            $table->string('date',100);
            $table->string('time')->nullable();
            $table->string('payment')->nullable();
            $table->string('IP',20)->nullable();
            $table->string('note',200)->nullable();
            $table->string('status',5)->default('New');
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
        Schema::dropIfExists('processes');
    }
}
