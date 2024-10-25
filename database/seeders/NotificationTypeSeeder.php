<?php

namespace Database\Seeders;

use App\Models\NotificationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['info', 'debug', 'success', 'warning', 'error'];

        foreach ($types as $type) {
            if (! NotificationType::StrictByName($type)->first()) {
                NotificationType::create([
                    'name' => $type,
                ]);
            }
        }
    }
}
