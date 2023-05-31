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
        Schema::create('scheduled_calls', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('mentor_id');
            $table->varchar('start_time');
            $table->varchar('end_time');
            $table->boolean('status');
            $table->longtext('call_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheduled_calls');
    }
};
