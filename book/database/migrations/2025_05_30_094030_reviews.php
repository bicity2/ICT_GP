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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string("book_id",20);
            $table->unsignedBigInteger("user_id");
            $table->string("comment");
            $table->unsignedTinyInteger("rating");
            $table->timestamps();

            // リレーションシップ（外部参照制約）の設定
            // p159
            $table->foreign('book_id')->references('isbn')->on('books');
            $table->foreign('user_id')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
