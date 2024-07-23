<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. JOURNAL ORGANIZATION
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('created_by')->nullable();
            $table->string('journal_mid')->nullable();
            $table->string('article_status')->nullable(); // active , inactive, featured
            $table->string('full_title')->nullable(); // part of name of journal, should be unique
            $table->string('short_title')->nullable(); // part of name of journal
            $table->string('org_society')->nullable(); // name of organization society
            $table->string('email')->nullable();
            $table->string('article_contact')->nullable();
            $table->string('logo')->nullable();
            $table->string('photo')->nullable();
            $table->longText('about')->nullable();
            $table->longText('aims_scope')->nullable();
            $table->text('link')->nullable();
            $table->longText('policy')->nullable();
            //$table->longText('indexing')->nullable();
            //$table->string('publisher')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
