<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurgeryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surgery', function (Blueprint $table) {
            $table->increments('id');
            $table->date('surgery_date');
            $table->string('type')->nullable();
            $table->string('code')->nullable();
            $table->string('complications')->nullable();
            $table->boolean('anesthetic');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('surgery');
    }
}
