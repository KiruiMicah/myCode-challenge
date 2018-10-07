<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('acronym',200);
            $table->string('description',800);
              $table->string('url',500);
              $table->string('type',100);
              $table->string('languagesupported',200);
              $table->string('periodicity',200);
              $table->string('economycoverage',200);
              $table->string('granularity',50);
              $table->string('numberofeconomies',100);
              $table->string('topics',500);
              $table->string('updatefrequency',200);
              $table->string('updateschedule',255);
              $table->string('lastrevisiondate',20);
              $table->string('contactdetails',100);
              $table->string('accessoption',100); 
             $table->string('bulkdownload',500);
             $table->string('cite',100);
             $table->string('detailpageurl',255);
             $table->integer('popularity');
             $table->string('coverage',50);
             $table->integer('api');
             $table->string('apiaccessurl',255);
             $table->string('apisourceid',255);

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
        Schema::dropIfExists('companies');
    }
}
