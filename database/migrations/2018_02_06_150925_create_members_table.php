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
            $table->integer('sp_user_id');
            $table->integer('hh_user_id');
            $table->string('sp_title')->nullable();
            $table->string('hh_title')->nullable();
            $table->string('sp_fname')->nullable();
            $table->string('hh_fname')->nullable();
            $table->string('sp_mname')->nullable();
            $table->string('hh_mname')->nullable();
            $table->string('sp_lname')->nullable();
            $table->string('hh_lname')->nullable();
            $table->string('sp_sex', 20)->nullable();
            $table->string('hh_sex',20)->nullable();
            $table->date('sp_dob')->nullable();
            $table->date('hh_dob')->nullable();
            $table->text('sp_address')->nullable();
            $table->text('hh_address')->nullable();
            $table->text('sp_alt_address')->nullable();
            $table->text('hh_alt_address')->nullable();
            $table->string('sp_home_phone',50)->nullable();
            $table->string('hh_home_phone',50)->nullable();
            $table->string('sp_cell_phone',50)->nullable();
            $table->string('hh_cell_phone',50)->nullable();
            $table->string('sp_work_phone',50)->nullable();
            $table->string('hh_work_phone',50)->nullable();
            $table->string('sp_email')->nullable();
            $table->string('hh_email')->nullable();
            $table->string('sp_fax')->nullable();
            $table->string('hh_fax')->nullable();
            $table->string('sp_extra_phone',50)->nullable();
            $table->string('hh_extra_phone',50)->nullable();
            $table->string('sp_marital_status',50)->nullable();
            $table->string('hh_marital_status',50)->nullable();
            $table->date('sp_anniversary_date')->nullable();
            $table->date('hh_anniversary_date')->nullable();
            $table->string('sp_occupation')->nullable();
            $table->string('hh_occupation')->nullable();
            $table->string('sp_employer')->nullable();
            $table->string('hh_employer')->nullable();
            $table->string('sp_member_status')->nullable();
            $table->string('hh_member_status')->nullable();
            $table->string('sp_church_background')->nullable();
            $table->string('hh_church_background')->nullable();
            $table->string('sp_baptized')->nullable();
            $table->string('hh_baptized')->nullable();
            $table->text('sp_skills')->nullable();
            $table->text('hh_skills')->nullable();
            $table->text('childrens')->nullable();
            $table->text('hh_previous_positions')->nullable();
            $table->text('sp_previous_positions')->nullable();
            $table->text('hh_activities')->nullable();
            $table->text('sp_activities')->nullable();
            $table->text('hh_spiritual_gifts')->nullable();
            $table->text('sp_spiritual_gifts')->nullable();
            $table->text('hh_willing_to_serve')->nullable();
            $table->text('sp_willing_to_serve')->nullable();
            $table->text('comments')->nullable();
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
