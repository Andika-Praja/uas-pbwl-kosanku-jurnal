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
        Schema::create('sewas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('huni_id');
            $table->foreign('huni_id')->references('id')->on('penghunis');
            $table->unsignedBigInteger('kam_id');
            $table->foreign('kam_id')->references('id')->on('kamars');
            $table->date('tgl_bayar');
            $table->string('bulan');
            $table->string('bayar');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewas');
    }
};
