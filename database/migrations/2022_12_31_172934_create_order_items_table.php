<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products')->cascadeOnUpdate()->cascadeOnDelete();
            $table->longText('product_object');
            $table->foreignId('amazing_sale_id')->nullable()->constrained('amazing_sales')->cascadeOnUpdate()->cascadeOnDelete();
            $table->longText('amazing_sale_object');
            $table->decimal('amazing_sale_discount_amount' , 20 ,3)->nullable();
            $table->integer('number')->default(1);
            $table->decimal('final_product-price' , 20 ,3)->nullable();
            $table->decimal('final_total_product-price' , 20 ,3)->nullable()->comment("number * final_price");
            $table->foreignId('color_id')->nullable()->constrained('product_colors')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('guarantee_id')->nullable()->constrained('guarantees')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
