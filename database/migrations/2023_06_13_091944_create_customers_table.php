<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customerName');
            $table->string('customerMobile')->unique();
            $table->string('customerInvitedBy');
            $table->integer('customerCount_Of_Visits')->nullable();
            $table->string('customerLast_Visit')->nullable();
            $table->string('customerAdded_by')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
