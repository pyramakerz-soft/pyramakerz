<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->json('bullets')->nullable()->after('description');
            $table->json('ar_bullets')->nullable()->after('bullets');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->dropColumn('bullets');
            $table->dropColumn('ar_bullets');
        });
    }
};
