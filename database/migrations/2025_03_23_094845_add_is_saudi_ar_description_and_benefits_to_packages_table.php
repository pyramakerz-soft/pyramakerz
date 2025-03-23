<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->boolean('is_saudi')->default(1)->after('price');
            $table->text('ar_description')->nullable()->after('description');
            $table->text('benefits')->nullable()->after('ar_description');
        });
    }

    public function down(): void
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->dropColumn(['is_saudi', 'ar_description', 'benefits']);
        });
    }
};
