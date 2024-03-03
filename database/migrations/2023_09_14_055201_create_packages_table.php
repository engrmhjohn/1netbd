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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('en_package_name')->nullable();
            $table->string('en_amount_label')->nullable();
            $table->string('en_amount')->nullable();
            $table->string('en_mbps_value')->nullable();
            $table->string('en_short_info_one')->nullable();
            $table->string('en_short_info_two')->nullable();
            $table->string('en_short_info_three')->nullable();
            $table->string('en_short_info_four')->nullable();
            $table->string('en_short_info_five')->nullable();
            $table->string('en_short_info_six')->nullable();
            $table->string('en_short_info_seven')->nullable();
            $table->string('en_short_info_eight')->nullable();
            $table->string('en_short_info_nine')->nullable();
            $table->string('en_short_info_ten')->nullable();
            $table->string('en_button_text')->nullable();
            $table->string('en_discount_otc')->nullable();
            $table->string('en_discount_monthly_fee')->nullable();
            $table->string('en_otc_amount')->nullable();
            $table->string('top_package')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
