<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(App\Models\Reservation::class);
            $table->decimal('amount');

            $table->string('order_id')->nullable();
            $table->string('tx_id')->nullable();
            $table->string('status')->nullable();
            $table->string('payment_method')->nullable();

            $table->datetime('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
