<?php

namespace Database\Seeders;

use App\Models\ServiceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serviceTypes = [
            ['name' => 'Car Shipping Services', 'slug' => 'car-shipping-services'],
            ['name' => 'Freight & Equipment Hauling', 'slug' => 'freight-and-equipment-hauling'],
        ];

        foreach ($serviceTypes as $type) {
            ServiceType::create($type);
        }
    }
}
