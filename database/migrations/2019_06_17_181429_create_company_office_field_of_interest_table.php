<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyOfficeFieldOfInterestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_office_fields_of_interest', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('office_id');
            $table->bigInteger('field_id');
            $table->timestamps();

            $table->foreign('office_id')
                ->references('id')->on('company_offices')
                ->onDelete('cascade');

            $table->foreign('field_id')
                ->references('id')->on('fields_of_interest')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_office_fields_of_interest');
    }
}
