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
        Schema::create('t_c_s', function (Blueprint $table) {
            $table->id();
            $table->string('en_title')->nullable();
            $table->string('bn_title')->nullable();
            $table->longText('en_payment_mode')->nullable();
            $table->longText('en_documentation')->nullable();
            $table->longText('en_after_sales_service')->nullable();
            $table->longText('en_client_responsibility')->nullable();
            $table->longText('en_others')->nullable();
            $table->longText('en_contact_termination')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_c_s');
    }
};
