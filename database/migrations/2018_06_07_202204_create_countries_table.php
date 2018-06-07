<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries_status', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->uuid('uuid');
            $table->string('name',100)->unique();
            $table->string('description',255);
            $table->timestamps();
            $table->softDeletes();

        });

        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('name', 100)->unique();
            $table->string('iso_code_alpha_2', 2)->unique();
            $table->string('iso_code_alpha_3', 3)->unique();
            $table->string('iso_code_numeric', 3)->unique();
            $table->string('phone_code', 4)->unique();
            $table->addColumn('tinyInteger','status_id',['lenght' => 3, 'unsigned' => true]);
            //$table->tinyInteger('status_id',3);
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('status_id')->references('id')->on('countries_status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries_status');
        Schema::dropIfExists('countries');
    }
}
