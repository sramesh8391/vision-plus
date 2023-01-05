<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_menu', function (Blueprint $table) {
            $table->id('menu_id');
            $table->string('menu_name')->nullable();
            $table->string('menu_file')->nullable();
            $table->string('menu_icon')->nullable();
            $table->enum('active_status',['0','1'])->comment('0= active , 1 = inactive');
            $table->string('usercreate')->nullable();
            $table->string('userchange')->nullable();
            $table->enum('param',['0','1'])->comment('0 = main_menu, 1= sub_menu');
            $table->string('m_param')->nullable()->comment('main_menu id');
            $table->string('sub_status')->comment('1 = sub menu heading id');
            $table->string('staff_permission')->comment('0=yes 1= no');
            $table->dateTime('crcdt');
            $table->integer('chngdt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_menu');
    }
}
