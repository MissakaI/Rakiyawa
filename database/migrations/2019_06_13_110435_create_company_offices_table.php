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
            $table->unsignedBigInteger('company_id');
            $table->string('code');
            $table->string('header')->nullable(false); //heading text
            $table->boolean('head_office')->nullable(false); //true only when adding head office details
            $table->string('address_lane');
            $table->string('address_city')->nullable(false);
            $table->json('contact_persons'); //contact persons info is saved in a json
            /* json format
             {
              "name":"",
              "contact":{
                "contact_type":"number"
               }
             }
             */

//            $table->json('office_contact_no');
            $table->string('about');
            $table->binary('logo');
            $table->timestamps();

            $table->foreign('company_id')
                ->references('id')->on('companies')
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
        Schema::dropIfExists('company_offices');
    }
}
