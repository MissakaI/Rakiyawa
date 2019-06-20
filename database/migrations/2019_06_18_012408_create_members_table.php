<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable(false);
            $table->string('last_name')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('address_lane');
            $table->string('address_city');
            $table->string('username')->unique();
            $table->binary('password')->nullable(false);
            $table->mediumText('biography');
            $table->string('website');

            $table->json('contact_info');
            /* json format
             {
              "name":"",
              "contact":{
                "contact_type":"number"
               }
             }
             */

            $table->json('recommendations');
            /* json format
             [{
              "referee_name":"",
              "company":"",
              "title":"",
              "contact_no":"",
              "contact_email":""
             }]
             */

            $table->string('profile_picture');
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
        Schema::dropIfExists('members');
    }
}
