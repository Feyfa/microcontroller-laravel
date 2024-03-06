<?php

namespace Database\Seeders;

use App\Models\Family;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Family::insert([
            [
                'name' => 'AVR',
                'slug' => 'avr',
            ],
            [
                'name' => 'ARDUINO',
                'slug' => 'arduino',
            ],
            [
                'name' => 'STM',
                'slug' => 'stm',
            ],
        ]);
    }
}
