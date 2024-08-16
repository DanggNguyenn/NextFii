<?php
// database/migrations/2024_08_05_000003_create_lunch_requests_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLunchRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('lunch_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('users');
            $table->foreignId('restaurant_id')->constrained();
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('lunch_requests');
    }
};
