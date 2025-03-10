<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->decimal('total_price', 10, 2)->after('plan_name_ar')->default(0);
            $table->decimal('discount_applied', 10, 2)->after('total_price')->default(0);
            $table->enum('discount_type', ['fixed', 'percentage'])->after('discount_applied')->default('fixed');
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['total_price', 'discount_applied', 'discount_type']);
        });
    }
};
