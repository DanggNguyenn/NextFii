<?php
// database/migrations/2024_08_05_000004_create_lunch_choices_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLunchChoicesTable extends Migration
{
    public function up()
    {
        Schema::create('lunch_choices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lunch_request_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('meal_id')->constrained();
            $table->timestamps();
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('lunch_choices');
    }
};
