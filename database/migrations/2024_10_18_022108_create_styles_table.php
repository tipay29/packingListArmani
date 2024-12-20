<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStylesTable extends Migration
{

    public function up()
    {
        Schema::create('styles', function (Blueprint $table) {
            $table->id();
            $table->string('style_code')->nullable();
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('styles');
    }
}
