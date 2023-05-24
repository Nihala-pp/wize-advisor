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
        Schema::create('user_meta_data', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->char('mobile');
            $table->char('company');
            $table->char('designation');
            $table->text('address');
            $table->text('social_linked_in');
            $table->json('industry');
            $table->json('language');
            $table->json('expertise');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_meta_data');
    }
};
