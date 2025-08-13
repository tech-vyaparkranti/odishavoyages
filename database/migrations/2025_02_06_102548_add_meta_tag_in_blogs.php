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
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('meta_title', 500)->nullable(true)->default(null)->after('instagram_link');
            $table->text('meta_keyword')->nullable(true)->after('meta_title');
            $table->text('meta_description')->nullable(true)->after('meta_keyword');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['meta_title', 'meta_keyword', 'meta_description']);

            //
        });
    }
};
