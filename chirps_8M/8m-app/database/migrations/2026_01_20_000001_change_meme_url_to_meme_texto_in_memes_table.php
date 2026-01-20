<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('memes', function (Blueprint $table) {
            $table->text('meme_texto')->after('id');
            $table->dropColumn('meme_url');
        });
    }

    public function down(): void
    {
        Schema::table('memes', function (Blueprint $table) {
            $table->string('meme_url')->nullable();
            $table->dropColumn('meme_texto');
        });
    }
};
