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
        Schema::create('company_infos', function (Blueprint $table) {
            $table->id();
            $table->string('en_name')->nullable();
            $table->string('en_hotline')->nullable();
            $table->string('en_sales_number')->nullable();
            $table->string('email')->nullable();
            $table->longText('fb_link')->nullable();
            $table->longText('youtube_link')->nullable();
            $table->longText('linkedin_link')->nullable();
            $table->longText('map_link')->nullable();
            $table->longText('en_address')->nullable();
            $table->longText('en_working_hours')->nullable();
            $table->longText('color_logo')->nullable();
            $table->longText('white_logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_infos');
    }
};
