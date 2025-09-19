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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title',190)->nullable();
            $table->string('slug',190)->nullable();
            $table->string('tags',40)->nullable();
            $table->text('content')->nullable();
            $table->string('photo',50)->nullable();
            $table->tinyInteger('posted')->default(0)->comment('0=draft, 1=posted');
            $table->date('date')->nullable();
            $table->string('author',40)->nullable();
            $table->integer('category_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
