<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_code');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->binary('password');
            $table->json('access_privileges');
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
        Schema::dropIfExists('company_admins');
    }
}
