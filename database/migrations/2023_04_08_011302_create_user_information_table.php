<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->dateTime("birthdate")->nullable();
            $table->string("avatar")->nullable();
            $table->string("country")->nullable();
            $table->string("city")->nullable();
            $table->string("street")->nullable();
            $table->string("house_number")->nullable();
            $table->string("floor")->nullable();
            $table->string("apartment_number")->nullable();
            $table->string("index")->nullable();

            $table->timestamps();

            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_information_table');
    }
};
