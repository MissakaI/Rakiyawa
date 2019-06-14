<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_offices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('office_code');
            $table->string('office_header'); //heading text
            $table->boolean('head_office'); //true only when adding head office details
            $table->string('office_address_lane');
            $table->string('office_address_city');
            $table->json('office_contact_persons'); //contact persons info is saved in a json
            /* json format
             {
              "name":"",
              "contact":{
                "contact_type":"number"
               }
             }
             */

//            $table->json('office_contact_no');
            $table->string('office_about');
            $table->binary('office_logo');
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
        Schema::dropIfExists('company_offices');
    }
}
