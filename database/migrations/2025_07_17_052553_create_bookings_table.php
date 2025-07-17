<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->date('birthday');
            $table->enum('konsultasi_type', ['Online','Offline']);
            $table->text('complaint')->nullable();
            $table->date('booking_date');
            $table->string('booking_time');
            $table->unsignedBigInteger('psikolog_id');
            $table->string('psikolog_name');
            $table->decimal('price', 10, 2);
            $table->string('xendit_invoice_id')->nullable();
            $table->enum('payment_status', ['PENDING','PAID','EXPIRED','FAILED'])
                  ->default('PENDING');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
