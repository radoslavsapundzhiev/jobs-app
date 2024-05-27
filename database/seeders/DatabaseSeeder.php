<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
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
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'Pesho Peshov',
            'email' => 'pesho@abv.bg'
        ]);

        Job::factory(8)->create([
            'user_id' => $user->id
        ]);
    }
}
