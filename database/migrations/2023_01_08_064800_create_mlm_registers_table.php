<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMlmRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mlm_register', function (Blueprint $table) {
            $table->id('user_id');
            $table->integer('user_rank')->nullable();
            $table->string('user_profileid')->nullable();
            $table->string('epin')->nullable();
            $table->string('user_fname')->nullable();
            $table->string('user_lname')->nullable();
            $table->string('user_password')->nullable();
            $table->string('user_dpassword')->nullable();
            $table->integer('user_proid')->nullable();
            $table->string('user_sponsername')->nullable();
            $table->string('user_sponserid')->nullable();
            $table->string('user_placementid')->nullable();
            $table->enum('user_position', ['Left', 'Right'])->nullable();
            $table->string('user_placement')->nullable();
            $table->string('user_pancard')->nullable();
            $table->string('user_dob')->nullable();
            $table->string('user_secondname')->nullable();
            $table->longText('user_commaddr1')->nullable();
            $table->longText('user_commaddr2')->nullable();
            $table->integer('user_city')->nullable();
            $table->integer('user_state')->nullable();
            $table->integer('user_country')->nullable();
            $table->integer('user_postalcode')->nullable();
            $table->longText('user_paddr1')->nullable();
            $table->longText('user_paddr2')->nullable();
            $table->integer('user_pcity')->nullable();
            $table->integer('user_pstate')->nullable();
            $table->integer('user_pcountry')->nullable();
            $table->integer('user_ppostalcode')->nullable();
            $table->bigInteger('user_phone')->nullable();
            $table->string('user_email')->nullable();
            $table->string('user_bankname')->nullable();
            $table->bigInteger('user_accno')->nullable();
            $table->string('user_tronaddr')->nullable();
            $table->string('user_accholdername')->nullable();
            $table->string('user_branch')->nullable();
            $table->string('user_ifsccode')->nullable();
            $table->string('user_nomineename')->nullable();
            $table->string('user_identifycardtype')->nullable();
            $table->string('user_idnumber')->nullable();
            $table->longText('user_naddr1')->nullable();
            $table->longText('user_naddr2')->nullable();
            $table->integer('user_ncity')->nullable();
            $table->integer('user_nstate')->nullable();
            $table->integer('user_ncountry')->nullable();
            $table->integer('user_npostalcode')->nullable();
            $table->string('user_nphone')->nullable();
            $table->string('user_nemail')->nullable();
            $table->string('user_shipname')->nullable();
            $table->longText('user_saddr1')->nullable();
            $table->longText('user_saddr2')->nullable();
            $table->integer('user_scity')->nullable();
            $table->integer('user_sstate')->nullable();
            $table->integer('user_scountry')->nullable();
            $table->integer('user_spostalcode')->nullable();
            $table->integer('user_paymenttype')->nullable();
            $table->integer('user_paymentstaus')->nullable();
            $table->dateTime('user_login')->nullable();
            $table->dateTime('user_updatedlogin')->nullable();
            $table->string('user_image')->nullable();
            $table->string('user_poster')->nullable();
            $table->dateTime('user_date')->nullable();
            $table->integer('user_membertype')->nullable();
            $table->string('user_ip')->nullable();
            $table->string('user_status')->comment('0=Active', '1=Inactive', '5=Temp-Account')->nullable();
            $table->tinyInteger('user_registered')->nullable();
            $table->integer('level')->nullable();
            $table->integer('mem_package')->nullable();
            $table->integer('mempay_status')->nullable();
            $table->integer('mem_exp_stat')->nullable();
            $table->integer('authn_stat')->nullable();
            $table->string('authr_key')->nullable();
            $table->integer('ref_stat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mlm_register');
    }
}
