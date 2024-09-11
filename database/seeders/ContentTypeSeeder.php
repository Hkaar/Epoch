<?php

namespace Database\Seeders;

use App\Models\ContentType;
use Illuminate\Database\Seeder;

class ContentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['image', 'text', 'video'];

        foreach ($types as $type) {
            if (! ContentType::StrictByName($type)->first()) {
                ContentType::create([
                    'name' => $type,
                ]);
            }
        }
    }
}
