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
        Schema::create('comments_news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('news_id')->nullable();
            $table->unsignedBigInteger('comments_id')->nullable();
            $table->timestamps();
            $table->foreign('news_id')
                ->references('id')
                ->on('news')
                ->cascadeOnDelete();
            $table->foreign('comments_id')
                ->references('id')
                ->on('comments')
                ->cascadeOnDelete();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments_news');
    }
};
