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
            $table->id();
            // one customer can have multiple bookings
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->integer('number_of_people');
            $table->string('accommodation'); // type of tent, camper etc
            $table->boolean('has_dog')->default(false);
            $table->integer('extra_tents')->default(0);
            $table->date('start_date');
            $table->date('end_date');

            $table->timestamps();
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
