<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("prod_name", 200)->nullable();
            $table->decimal("price", 20, 0)->nullable();
            $table->text("content")->nullable();
            $table->string("cover_img", 500)->nullable();
            $table->unsignedBigInteger("id_maker")->index("idx_products_id_maker")->nullable();
            $table->bigInteger("id_cat")->index("idx_products_id_cat")->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
