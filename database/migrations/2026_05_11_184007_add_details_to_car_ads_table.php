<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('car_ads', function (Blueprint $table) {
            $table->string('engine_type')->nullable();
            $table->string('engine_volume')->nullable();
            $table->string('body_type')->nullable();
            $table->integer('mileage')->nullable();
            $table->string('color')->nullable();
            $table->string('market')->nullable();
            $table->string('condition')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('car_ads', function (Blueprint $table) {
            $table->dropColumn([
                'engine_type',
                'engine_volume',
                'body_type',
                'mileage',
                'color',
                'market',
                'condition',
            ]);
        });
    }
};
