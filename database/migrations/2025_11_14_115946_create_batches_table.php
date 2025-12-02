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
        Schema::create('batches', function (Blueprint $table) {
            $table->id();

            // Identification
            $table->string('batch_code')->unique();         // Unique batch identifier
            $table->string('name')->nullable();             // Optional human-readable name

            // Manufacturer / Lot details
            $table->string('lot_number')->nullable();
            $table->string('kit_type')->nullable();         // e.g., "midstream", "cassette"
            $table->date('manufacture_date')->nullable();
            $table->date('expiry_date')->nullable();

            // Inventory / Counts
            $table->unsignedInteger('tests_count')->default(0); // Number of tests in the batch
            $table->date('received_date')->nullable();

            // Quality & Storage
            $table->string('storage_temp')->nullable();     // Recommended storage temperature
            $table->string('sensitivity')->nullable();      // e.g., "25 mIU/mL"
            $table->boolean('qc_passed')->default(false);   // Quality control status
            $table->date('qc_date')->nullable();

            // Operational status
            $table->enum('status', ['pending', 'available', 'in_use', 'completed', 'recalled', 'expired'])
                  ->default('pending');

            $table->text('description')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index(['lot_number', 'expiry_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches');
    }
};
