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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->longText('desktop_image')->nullable();
            $table->longText('mobile_image')->nullable();
            $table->longText('en_description')->nullable();
            $table->longText('offer_last_date')->nullable();
            $table->longText('position')->nullable();
            $table->longText('website_link')->nullable();
            $table->longText('button_text')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
