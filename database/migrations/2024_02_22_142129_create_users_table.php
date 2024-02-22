<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_level_id')->constrained(
        table: 'user_levels'
      );
      $table->foreignId('user_license_id')->constrained(
        table: 'user_licenses'
      );
      $table->string('last_name')->index();
      $table->string('first_name')->index();
      $table->string('middle_name')->index();
      $table->string('email')->unique();
      $table->string('status')->index();
      $table->string('password');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('users');
  }
};
