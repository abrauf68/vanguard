<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'How do I schedule my car for transport?',
                'answer' => 'Simply request a free quote online or call our customer service team. We’ll confirm pickup and delivery dates that work with your schedule.',
                'is_active' => 'active',
            ],
            [
                'question' => 'What transport options are available?',
                'answer' => 'We offer both open-air and enclosed carriers. Open-air is cost-effective for standard vehicles; enclosed carriers provide extra protection for luxury or classic cars.',
                'is_active' => 'active',
            ],
            [
                'question' => 'Is my vehicle insured during transit?',
                'answer' => 'Yes—every shipment includes standard insurance coverage. You can also upgrade to our premium policy for zero deductible and broader protection.',
                'is_active' => 'active',
            ],
            [
                'question' => 'Can I track my car in real-time?',
                'answer' => 'Absolutely. Once your vehicle is loaded, you’ll receive a tracking link to monitor its location and estimated arrival in real‑time.',
                'is_active' => 'active',
            ],
            [
                'question' => 'What if I need to change my pickup or delivery?',
                'answer' => 'Just contact us at least 48 hours before the scheduled date. We’ll do our best to accommodate changes without extra fees whenever possible.',
                'is_active' => 'active',
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
