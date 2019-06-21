<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('registration_no')->nullable(false);
            $table->string('name')->nullable(false);
//            $table->string('hq_address_lane');
//            $table->string('hq_address_city');
            $table->mediumText('about');
            $table->string('website');
            $table->year('foundation_year');
            $table->unsignedSmallInteger('employee_count');
            $table->string('logo');
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
        Schema::dropIfExists('companies');
    }
}
