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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // These fields are empty by default.
            $table->string('title')->nullable();
            $table->string('initials')->nullable(); // initials for first names
            $table->string('intersertion')->nullable(); // this is "tussenvoegsel" in Dutch
            $table->string('surname')->nullable();
            $table->string('street')->nullable();
            $table->string('house_number')->nullable();
            $table->string('house_number_addition')->nullable(); // "toevoeging"
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable(); // "woonplaats"
            $table->string('country')->nullable();
            $table->string('phone_number')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
