<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveFeaturesFromOrders extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('features'); // Remove the unused column
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->json('features')->nullable(); // Restore it if rolling back
        });
    }
}
