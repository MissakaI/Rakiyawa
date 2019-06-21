<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeildsOfInterestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields_of_interest', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('field_name')->nullable(false);
            $table->text('field_description');
            $table->unsignedBigInteger('verified_by');
            $table->timestamps();

            $table->foreign('verified_by')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feilds_of_interest');
    }
}
