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
        Schema::create('invoices_items', function (Blueprint $table) {
            $table->id();
//            $table->foreignIdFor(\App\Models\Invoice::class)->onDelete();
//            $table->foreignIdFor(\App\Models\Product::class);
            $table->foreignId('invoice_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('product_id')->constrained();
            $table->decimal('quantity');
            $table->decimal('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices_items');
    }
};
