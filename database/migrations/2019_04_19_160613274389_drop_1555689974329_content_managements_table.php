<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1555689974329ContentManagementsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('content_managements');
    }

    public function down()
    {
        Schema::create('content_managements', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
    }
}
