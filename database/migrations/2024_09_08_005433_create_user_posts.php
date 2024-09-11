<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreignId('post_id')->constrained('posts')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_posts');
    }
};
