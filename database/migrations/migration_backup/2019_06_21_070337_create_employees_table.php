<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('empl_cde');
            $table->integer('bio_code');
            $table->char('lastname',30);
            $table->char('firstnme',30);
            $table->char('midl_nme',30)->nullable();
            $table->char('nickname',30);
            $table->date('birthday')->nullable();
            $table->char('sex_____', 1);
            $table->boolean('delete__');
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
        Schema::dropIfExists('employees');
    }
}
