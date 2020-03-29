<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labs', function (Blueprint $table) {
            $table->id();

            // establishing datatypes for lab data
            $table->string('username')->nullable();
            $table->string('organization')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('category')->nullable();
            $table->string('privacy')->nullable();
            $table->string('image_name')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('university')->nullable();
            $table->string('working_space')->nullable();
            $table->string('technology')->nullable();
            $table->string('incubator')->nullable();
            $table->string('status')->nullable();

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
        Schema::dropIfExists('labs');
    }
}
