<?php

namespace Database\Seeders;

use App\Models\Package;
use App\Models\PackageItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'name' => 'Basic',
                'price' => '199',
                'type' => 'shipment',
                'is_active' => 'active',
            ],
            [
                'name' => 'Standard',
                'price' => '349',
                'type' => 'shipment',
                'is_active' => 'active',
            ],
            [
                'name' => 'Premium',
                'price' => '499', // corrected price from HTML
                'type' => 'shipment',
                'is_active' => 'active',
            ],
        ];

        foreach ($packages as $package) {
            Package::create($package);
        }

        $packageItems = [
            // Basic (id = 1)
            ['package_id' => 1, 'item' => 'Open-air transport', 'item_type' => 'checked'],
            ['package_id' => 1, 'item' => 'Door-to-door pickup', 'item_type' => 'checked'],
            ['package_id' => 1, 'item' => 'Standard insurance', 'item_type' => 'checked'],
            ['package_id' => 1, 'item' => 'Enclosed carrier', 'item_type' => 'crossed'],
            ['package_id' => 1, 'item' => 'Real‑time GPS tracking', 'item_type' => 'crossed'],

            // Standard (id = 2)
            ['package_id' => 2, 'item' => 'Enclosed transport option', 'item_type' => 'checked'],
            ['package_id' => 2, 'item' => 'Door-to-door delivery', 'item_type' => 'checked'],
            ['package_id' => 2, 'item' => 'Premium insurance coverage', 'item_type' => 'checked'],
            ['package_id' => 2, 'item' => 'Real‑time GPS tracking', 'item_type' => 'checked'],
            ['package_id' => 2, 'item' => 'Climate‑controlled storage', 'item_type' => 'crossed'],

            // Premium (id = 3)
            ['package_id' => 3, 'item' => 'Enclosed, climate‑controlled transport', 'item_type' => 'checked'],
            ['package_id' => 3, 'item' => 'Door-to-door pickup & delivery', 'item_type' => 'checked'],
            ['package_id' => 3, 'item' => 'Top-tier insurance with zero deductible', 'item_type' => 'checked'],
            ['package_id' => 3, 'item' => '24/7 real‑time GPS tracking', 'item_type' => 'checked'],
            ['package_id' => 3, 'item' => 'Priority scheduling & support', 'item_type' => 'checked'],
        ];

        foreach ($packageItems as $item) {
            PackageItem::create($item);
        }
    }
}
