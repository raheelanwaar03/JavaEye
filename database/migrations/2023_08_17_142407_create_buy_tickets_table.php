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
        Schema::create('buy_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('user_email');
            $table->string('user_name');
            $table->string('ticket_title');
            $table->string('ticket_price');
            $table->string('ticket_img');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_tickets');
    }
};
