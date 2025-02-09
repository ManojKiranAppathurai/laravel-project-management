<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Custom1555651755640CreateAuditLogsTable extends Migration
{
    public function up()
    {
        Schema::create('audit_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->unsignedInteger('subject_id')->nullable();
            $table->string('subject_type')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->text('properties')->nullable();
            $table->string('host', 45)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('audit_logs');
    }
}
