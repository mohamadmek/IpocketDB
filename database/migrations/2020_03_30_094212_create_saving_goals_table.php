<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavingGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saving_goals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->string('interval');
            $table->string('ai')->nullable();
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            $table->integer('currencies_id')->unsigned();
            $table->foreign('currencies_id')->references('id')->on('currencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saving_goals');
    }
}
