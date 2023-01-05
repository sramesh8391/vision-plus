<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMlmStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mlm_staff', function (Blueprint $table) {
            $table->id('staff_id');
            $table->string('staff_username');
            $table->string('staff_email');
            $table->string('staff_password');
            $table->string('staff_Mob');
            $table->string('menu_permission');
            $table->integer('active_status');
            $table->timestamp('crcdt');
            $table->string('ip');
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
        Schema::dropIfExists('mlm_staff');
    }
}
