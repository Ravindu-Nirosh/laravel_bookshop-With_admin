<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->string('product_name');
            $table->string('product_slug');
            $table->string('product_code');
            $table->string('product_qty');
            $table->string('product_tag');
            $table->string('product_lang');
            $table->string('product_author');
            $table->string('product_publisher')->nullable();
            $table->string('product_isbn')->nullable();
            $table->string('product_price');
            $table->string('product_disprice')->nullable();
            $table->string('product_shortdescription');
            $table->string('product_longdescription');
            $table->string('product_thumbnail');
            $table->integer('hotdeals')->nullable();
            $table->integer('featured')->nullable();
            $table->integer('specila_offer')->nullable();
            $table->integer('specila_deals')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
