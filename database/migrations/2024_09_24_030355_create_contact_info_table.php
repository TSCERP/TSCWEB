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
        Schema::create('contact_info', function (Blueprint $table) {
            $table->id();
            $table->string('fullname'); // Tên đầy đủ
            $table->string('email'); // Email
            $table->string('company_name')->nullable(); // Tên công ty (không bắt buộc)
            $table->string('phone_number')->nullable(); // Số điện thoại (không bắt buộc)
            $table->unsignedBigInteger('contact_reason')->nullable(); // Lý do liên hệ (không bắt buộc)
            $table->text('message')->nullable(); // Lời nhắn (không bắt buộc)
            $table->timestamps();
            $table->foreign('contact_reason')->references('id')->on('contact_reasons')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_info');
    }
};
