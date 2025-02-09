<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1555651753169IncomeSourcesTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('income_sources');
    }

    public function down()
    {
        Schema::create('income_sources', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->float('fee_percent', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
