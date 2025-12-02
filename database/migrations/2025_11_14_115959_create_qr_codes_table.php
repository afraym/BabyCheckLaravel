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
        Schema::create('qr_codes', function (Blueprint $table) {
            $table->id();

            // Foreign key to batches table
            $table->unsignedBigInteger('batch_id'); // Reference to the batch
            $table->string('qr_code');             // QR code value or data
            $table->text('description')->nullable(); // Optional description for the QR code

            $table->timestamps();

            // Foreign key constraint
            $table->foreign('batch_id')->references('id')->on('batches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_codes');
    }
};
