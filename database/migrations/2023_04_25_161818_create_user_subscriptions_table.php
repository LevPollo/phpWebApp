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
        Schema::create('user_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("author_id");
            $table->timestamps();

            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");

            $table->foreign("author_id")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");

            $table->unique(["user_id", "author_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_subscriptions');
    }
};
