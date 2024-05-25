<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procurements', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); // this will create 'created_at' and 'updated_at' columns
            $table->string('code')->unique(); // code (pap) primary key
            $table->string('procurement_project');
            $table->string('pmo');
            $table->string('procurement_act');
            $table->string('mop');
            $table->date('pre_pro_conference')->nullable();
            $table->date('ads')->nullable();
            $table->date('eligibility_check')->nullable();
            $table->date('sub')->nullable();
            $table->date('bid_eval')->nullable();
            $table->date('post_qual')->nullable();
            $table->date('bac_resolution_award')->nullable();
            $table->date('notice_award')->nullable();
            $table->date('contract_signing')->nullable();
            $table->date('notice_proceed')->nullable();
            $table->date('delivery')->nullable();
            $table->date('inspection')->nullable();
            $table->decimal('total', 15, 2)->nullable();
            $table->decimal('mooe', 15, 2)->nullable();
            $table->decimal('co', 15, 2)->nullable();
            $table->text('remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procurements');
    }
}