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
        Schema::create('delivery_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("account_id");
            $table->bigInteger("sender_name");
            $table->bigInteger("receiver_name");
            $table->string("sender_phone")->nullable();
            $table->string("receiver_phone")->nullable();
            $table->text("pickup_address")->nullable();
            $table->text("delivery_address")->nullable();
            $table->string("save_sender")->default(0);
            $table->string("save_receiver")->default(0);
            $table->string("right_away")->default(0);
            $table->string("schedule_later")->default(0);
            $table->string("reoccurrence")->default(0);
            $table->string("one_time")->default(0);
            $table->string("save_errand")->default(0);
            $table->string("delivery_date")->nullable();
            $table->string("delivery_time")->nullable();
            $table->string('payment_status')->default("pending");
            $table->string('delivery_status')->default("pending");
            $table->string("repeat_schedule")->nullable();
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
        Schema::dropIfExists('delivery_items');
    }
};
