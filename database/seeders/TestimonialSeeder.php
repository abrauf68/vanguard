<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Emily Davis',
                'image' => 'frontAssets/img/testimonials/testimonials-2.jpg',
                'position' => 'Car Dealer',
                'review_count' => 5,
                'review' => 'The team handled our fleet shipment flawlessly—on time, every time. Their tracking portal gave me total peace of mind.',
                'is_active' => 'active',
            ],
            [
                'name' => 'Michael Lee',
                'image' => 'frontAssets/img/testimonials/testimonials-1.jpg',
                'position' => 'Private Owner',
                'review_count' => 5,
                'review' => 'I was nervous about shipping my classic car, but their enclosed transport and insurance coverage exceeded my expectations.',
                'is_active' => 'active',
            ],
            [
                'name' => 'Sophia Martinez',
                'image' => 'frontAssets/img/testimonials/testimonials-3.jpg',
                'position' => 'Collector',
                'review_count' => 5,
                'review' => 'Excellent service from pickup to delivery. My vintage roadster arrived in perfect condition.',
                'is_active' => 'active',
            ],
            [
                'name' => 'David Kim',
                'image' => 'frontAssets/img/testimonials/testimonials-4.jpg',
                'position' => 'Manufacturer',
                'review_count' => 4,
                'review' => 'As an OEM partner, their seamless logistics and real‑time updates keep our production schedule on track.',
                'is_active' => 'active',
            ],
            [
                'name' => 'Smith Thompson',
                'image' => 'frontAssets/img/testimonials/testimonials-5.jpg',
                'position' => 'Relocation Client',
                'review_count' => 5,
                'review' => 'Moving cross-country was a breeze thanks to their efficient scheduling and professional team.',
                'is_active' => 'active',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
