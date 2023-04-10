<?php

use Database\Seeders\MiestaSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        $seeder = new MiestaSeeder();
        $seeder->_2023_04_08_203227_seed_miesta_up();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        $seeder = new MiestaSeeder();
        $seeder->_2023_04_08_203227_seed_miesta_down();
    }
};
