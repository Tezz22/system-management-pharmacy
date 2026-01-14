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
        Schema::create('warehouse_stocks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('warehouse_id')
                ->constrained('warehouses')
                ->cascadeOnDelete();

            $table->foreignId('medicine_batch_id')
                ->constrained('medicine_batches')
                ->cascadeOnDelete();

            $table->integer('quantity')->default(0);
            $table->integer('min_quantity')->nullable();

            $table->timestamps();

            $table->unique(['warehouse_id', 'medicine_batch_id']);
            $table->index(['warehouse_id']);
            $table->index(['medicine_batch_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouses_stock');
    }
};
