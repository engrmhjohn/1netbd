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
        Schema::create('buy_packages', function (Blueprint $table) {
            $table->id();
            $table->string('admin_id')->nullable();
            $table->string('en_package_name');
            $table->string('category');
            $table->string('en_mbps_value');
            $table->string('en_amount');
            $table->string('en_otc_amount');
            $table->string('subtotal')->nullable();
            $table->string('en_discount_monthly_fee')->nullable();
            $table->string('en_discount_otc')->nullable();
            $table->string('en_advance_bill_amount')->nullable();
            $table->string('formattedTotal');
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('nid_number');
            $table->longText('photo');
            $table->longText('nid_front');
            $table->longText('nid_back');
            $table->longText('address');
            $table->longText('remarks');
            $table->longText('agree');
            $table->string('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_packages');
    }
};
