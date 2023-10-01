<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
    //単語リスト
    public function up(): void
    {
        Schema::create('words', function (Blueprint $table) {
            $table->id();
            $table->string('word');
            $table->string('mean');
            $table->string('a_part_of_speech')->nullable();
            $table->string('example')->nullable();
            $table->string('pronounce')->nullable();
            $table->json('choices');
            $table->integer('correct_choice');
            $table->timestamps();
        });
    }
                //$table->string('correct_choice');は　
                //ABCDの選択肢にするためstringにする。
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('words');
    }
};
