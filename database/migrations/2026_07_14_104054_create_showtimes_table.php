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
        Schema::create('showtimes', function (Blueprint $table) {
            $table->id('showtime_id');

            $table->unsignedBigInteger('movie_id')->index();
           $table->unsignedBigInteger('studio_id')->index();

            $table->date('tanggal_tayang');
            $table->time('jam_mulai');
            $table->decimal('harga_tiket', 10, 2);

            // Foreign Key
            $table->foreign('movie_id')
                  ->references('movie_id')
                  ->on('movies')
                  ->onDelete('cascade');

            $table->foreign('studio_id')
                  ->references('studio_id')
                  ->on('studios')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('showtimes');
    }
};