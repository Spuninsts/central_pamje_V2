<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. SPECIALIZATION
     */
    public function up(): void
    {
        Schema::create('article_types', function (Blueprint $table) {
            $table->id();
            $table->string('type_created_by')->nullable();
            $table->string('type_entity_id')->nullable();
            $table->text('type_description')->nullable();
            $table->string('type_specialization')->nullable();
            $table->string('type_sub_spec')->nullable();
            $table->string('type_icon')->nullable();
            $table->string('type_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_types');
    }
};
