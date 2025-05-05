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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('access_token')->unique();
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->integer('adult_no');
            $table->integer('child_no');
            $table->decimal('amount');
            $table->decimal('deposit');

            $table->string('status')->default('draft');

            $table->foreignIdFor(App\Models\Customer::class);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
