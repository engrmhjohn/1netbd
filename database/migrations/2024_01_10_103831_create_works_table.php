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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id')->nullable();
            $table->string('en_visit_date')->nullable();
            $table->string('region_id')->nullable();
            $table->string('area_id')->nullable();
            $table->string('client_type_id')->nullable();
            $table->string('meeting_person_id')->nullable();
            $table->string('en_client_name')->nullable();
            $table->string('en_client_phone')->nullable();
            $table->string('en_client_address')->nullable();
            $table->string('feedback_id')->nullable();
            $table->longText('document')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
