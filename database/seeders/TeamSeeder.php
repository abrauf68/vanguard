<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'name' => 'Walter White',
                'image' => 'frontAssets/img/team/team-1.jpg',
                'description' => 'Walter is a seasoned web developer with a strong foundation in creating scalable and responsive web solutions that meet business goals efficiently.',
                'designation_id' => '17',
                'facebook' => 'https://www.facebook.com',
                'instagram' => 'https://www.instagram.com',
                'twitter' => 'https://www.x.com',
                'linkedin' => 'https://www.linkedin.com',
            ],
            [
                'name' => 'Sarah Jhinson',
                'image' => 'frontAssets/img/team/team-2.jpg',
                'description' => 'Sarah brings strategic thinking and creativity to our marketing efforts, ensuring our brand reaches the right audience with impact and clarity.',
                'designation_id' => '23',
                'facebook' => 'https://www.facebook.com',
                'instagram' => 'https://www.instagram.com',
                'twitter' => 'https://www.x.com',
                'linkedin' => 'https://www.linkedin.com',
            ],
            [
                'name' => 'William Anderson',
                'image' => 'frontAssets/img/team/team-3.jpg',
                'description' => 'William specializes in creating compelling content that communicates our message clearly and effectively across all platforms.',
                'designation_id' => '31',
                'facebook' => 'https://www.facebook.com',
                'instagram' => 'https://www.instagram.com',
                'twitter' => 'https://www.x.com',
                'linkedin' => 'https://www.linkedin.com',
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
