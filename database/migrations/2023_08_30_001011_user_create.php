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
        Schema::create('user_create', function (Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->string('user_id')->unique();
            $table->string('name');
            $table->string('password');
            $table->rememberToken();
            // ログインを保持
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('user_create');
    }
};
