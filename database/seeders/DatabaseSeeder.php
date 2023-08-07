<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            VmSeeder::class,
            TunelProviderSeeder::class,
            CloudflareDomainSeeder::class,
            TunelCloudflaredSeeder::class,
            TunelNgroxSeeder::class,
            TunnelSeeder::class,
            DetailOptionSeeder::class,
            CompanySeeder::class,
            DetailSeeder::class,
        ]);
    }
}
