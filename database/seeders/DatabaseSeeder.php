<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserRolePermissionSeeder::class,
            CountrySeeder::class,
            LanguageSeeder::class,
            GenderSeeder::class,
            MaritalStatusSeeder::class,
            DesignationSeeder::class,
            TimezoneSeeder::class,
            SettingSeeder::class,
            ServiceTypeSeeder::class,
            CompanyServiceSeeder::class,
            TeamSeeder::class,
            TestimonialSeeder::class,
            FaqSeeder::class,
            PackageSeeder::class,
            ServiceFeatureSeeder::class,
        ]);
    }
}
