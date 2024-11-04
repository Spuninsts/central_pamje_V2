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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('page_id')->nullable();
            $table->string('page_created_by')->nullable();
            $table->string('page_status')->nullable(); //active,inactive
            $table->string('page_type')->nullable(); //news,announcement,banner(banner more info page), Editors page.
            $table->string('page_title')->nullable(); // page title
            $table->string('page_category')->nullable();
            $table->string('page_subcategory')->nullable();
            $table->longText('page_tags')->nullable();
            $table->text('page_description')->nullable(); // page description
            $table->text('page_image_path')->nullable(); // for the image
            $table->string('page_url')->nullable(); // third party url
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
