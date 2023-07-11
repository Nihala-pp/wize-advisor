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
        Schema::create('mentors_join_request', function (Blueprint $table) {
            $table->id();
            $table->char('firstname');
            $table->char('lastname');
            $table->double('email');
            $table->char('linkedin_profile');
            $table->char('qualification');
            $table->char('designation');
            $table->char('is_experienced');
            $table->integer('number_of_session_per_week');
            $table->char('is_charged');
            $table->double('price_per_call');
            $table->json('expertise');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentors_join_request');
    }
};
