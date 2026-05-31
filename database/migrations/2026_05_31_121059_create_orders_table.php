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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number_phone')->nullable();
            $table->text('notes')->nullable();
            $table->date('date_ordered');
            $table->date('deadline');
            $table->date('date_completed')->nullable();
            $table->date('date_received')->nullable();
            $table->string('status');
            $table->decimal('dp_amount', 10, 2)->default(0);
            $table->decimal('total_amount', 10,2);
            $table->string('payment_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
