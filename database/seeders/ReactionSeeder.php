<?php

namespace Database\Seeders;

use App\Models\Reaction;
use Illuminate\Database\Seeder;

class ReactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reactions = ['like', 'dislike'];

        foreach ($reactions as $reaction) {
            if (! Reaction::StrictByName($reaction)->first()) {
                Reaction::create([
                    'name' => $reaction,
                ]);
            }
        }
    }
}
