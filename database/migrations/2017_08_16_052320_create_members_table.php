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
            $table->increments('id');
            $table->string('full_name',256);
            $table->string('preferred_name',128);
            $table->string('gender',6);
            $table->string('designation',32);
            $table->integer('contact_number',false,true);
            $table->string('email',128)->unique();
            $table->string('nic',11)->unique();
            $table->date('dob');
            $table->date('rotaractor_since');
            $table->string('address',512);
            $table->mediumText('projects_involved');
            $table->mediumText('projects_chaired');
            $table->mediumText('past_posts');
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
