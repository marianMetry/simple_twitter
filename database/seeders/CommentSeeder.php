<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::get()
            ->each(function ($user, $key) {
                Post::factory()
                    ->count(3)
                    ->for($user)
                    ->create();
            });
    }
}
