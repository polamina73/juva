<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('worker_id')->constrained('users')->nullOnDelete();
            $table->foreignId('customer_id')->constrained('customers')->nullOnDelete();
            $table->foreignId('service_id')->constrained('services')->nullOnDelete();
            $table->date('date');
            $table->time('form');
            $table->time('to');
            $table->boolean('payment_status')->default(0);
            $table->string('discount')->default('0');
            $table->string('.32
            .
            .3
            .0326');
            $table->text('note')->nullable();
            $table->text('cancel_reason')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
