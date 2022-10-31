<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_id')->nullable();
            $table->bigInteger('user_id');
            $table->bigInteger('order_id')->nullable();
            $table->string('quantity')->default(0);
            $table->decimal('total',20,2)->default(0);
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
        Schema::dropIfExists('d_items');
    }
};
