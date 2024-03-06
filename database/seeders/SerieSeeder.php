<?php

namespace Database\Seeders;

use App\Models\Serie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Serie::insert([
            [
                'family_id' => 1,
                'name' => 'introduction',
                'slug' =>  'introduction',
            ],
            [
                'family_id' => 1,
                'name' => 'Pin As Output',
                'slug' =>  'pin-as-output',
            ],
            [
                'family_id' => 1,
                'name' => 'Pin As Input',
                'slug' =>  'pin-as-input',
            ],
            [
                'family_id' => 2,
                'name' => 'Serial Print',
                'slug' =>  'serial-print',
            ],
            [
                'family_id' => 3,
                'name' => 'Multi Thread',
                'slug' => 'multi-thread'
            ],
            [
                'family_id' => 1,
                'name' => 'LCD16X2 Without I2C',
                'slug' => 'lcd16x2-without-i2c'
            ],
            [
                'family_id' => 1,
                'name' => 'ADC LCD16X2',
                'slug' => 'adc-lcd16x2',
            ],
            [
                'family_id' => 1,
                'name' => 'I2C Master PCF8574',
                'slug' => 'i2c-master-pcf8574',
            ],
            [
                'family_id' => 1,
                'name' => 'I2C Master Slave',
                'slug' => 'i2c-master-slave',
            ],
        ]);
    }
}