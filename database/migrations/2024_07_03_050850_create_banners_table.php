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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('banner_created_by')->nullable();
            $table->string('banner_status')->nullable(); // active,inactive
            $table->string('banner_title')->nullable(); // banner title
            $table->text('banner_description')->nullable(); // banner description
            $table->text('banner_image_path')->nullable(); // for the image
            $table->text('banner_url')->nullable();//this can go to a page or third party site.

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
