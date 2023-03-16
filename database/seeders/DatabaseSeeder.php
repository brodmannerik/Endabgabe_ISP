<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Podcast;
use App\Models\Subscription;
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

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
                ]);

        Podcast::factory(6)->create([
            'user_id' => $user->id
        ]);

        Subscription::factory()->create([
            'user_id' => $user->id,
            'name' => $user->name,
            'stripe_id' => $user->id
        ]);
    }
}
