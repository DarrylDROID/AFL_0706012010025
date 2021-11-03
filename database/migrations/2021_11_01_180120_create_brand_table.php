<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand', function (Blueprint $table) {
            $table->string('brand_code');
            $table->string('brand_name');
            $table->string('founder');
            $table->string('date_found');
            $table->string('headquarters');
            $table->timestamps();
        });

        Schema::table('brand', function (Blueprint $table) {
            $table->primary('brand_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brand');
    }
}
