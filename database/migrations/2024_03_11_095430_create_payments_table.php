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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_category_id')->nullable();
            $table->string('en_banner_text')->nullable();

            $table->string('en_heading_one')->nullable();
            $table->longText('en_description_one')->nullable();
            $table->longText('image_one')->nullable();


            $table->string('en_heading_two')->nullable();
            $table->longText('en_description_two')->nullable();
            $table->longText('image_two')->nullable();


            $table->string('en_heading_three')->nullable();
            $table->longText('en_description_three')->nullable();
            $table->longText('image_three')->nullable();


            $table->string('en_heading_four')->nullable();
            $table->longText('en_description_four')->nullable();
            $table->longText('image_four')->nullable();


            $table->string('en_heading_five')->nullable();
            $table->longText('en_description_five')->nullable();
            $table->longText('image_five')->nullable();


            $table->string('en_heading_six')->nullable();
            $table->longText('en_description_six')->nullable();
            $table->longText('image_six')->nullable();

            $table->string('en_heading_seven')->nullable();
            $table->longText('en_description_seven')->nullable();
            $table->longText('image_seven')->nullable();

            $table->string('en_heading_eight')->nullable();
            $table->longText('en_description_eight')->nullable();
            $table->longText('image_eight')->nullable();
            
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
