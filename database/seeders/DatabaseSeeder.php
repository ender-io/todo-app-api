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
        \App\Models\User::factory(4)->create();

        $this->call([
            TaskSeeder::class,
            StatusSeeder::class,
            CategorySeeder::class,
        ]);
    }
}
