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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id');

            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('showtime_id')->index();

            $table->dateTime('tanggal_booking');
            $table->decimal('total_bayar', 10, 2);
            $table->string('status_pembayaran');

            // Foreign Key
            $table->foreign('user_id')
                  ->references('user_id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('showtime_id')
                  ->references('showtime_id')
                  ->on('showtimes')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};