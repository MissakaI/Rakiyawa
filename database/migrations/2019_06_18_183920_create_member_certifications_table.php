<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members_certifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('certificate_id');
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('educator_id');
            $table->date('issue_date');
            $table->date('valid_till');
            $table->timestamps();

            $table->foreign('member_id')
                ->references('id')->on('members')
                ->onDelete('cascade');
            $table->foreign('educator_id')
                ->references('id')->on('educators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members_certifications');
    }
}
