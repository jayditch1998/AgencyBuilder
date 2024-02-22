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
    Schema::create('user_levels', function (Blueprint $table) {
      $table->id();
      $table->string('name')->index();
      $table->string('slug')->index();
      $table->integer('website_limit')->default(0);
      $table->integer('business_limit')->default(0);
      $table->integer('approval_hours')->default(0);
      $table->integer('approval_limit')->default(0);
      $table->tinyInteger('allow_all_plugins')->default(0);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('user_levels');
  }
};
