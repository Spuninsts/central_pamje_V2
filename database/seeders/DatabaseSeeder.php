<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Association;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(usersTableSeeder::class);
        $this->call(articleTableSeeder::class);
        $this->call(articleTypeTableSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(OrganizationSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(EntitySeeder::class);
        $this->call(JournalSeeder::class);
        $this->call(AssociationSeeder::class);
        //\App\Models\User::factory(2)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
