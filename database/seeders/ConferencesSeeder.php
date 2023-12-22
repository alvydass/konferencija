<?php

namespace Database\Seeders;

use App\Models\Conference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $conference1 = Conference::create([
            'title' => 'First Conference',
            'description' => 'Description for First Conference',
            'lecturer' => 'John Doe',
            'date' => '2023-01-15',
            'time' => '09:00',
            'address' => '123 Main St, Anytown',
        ]);

        $conference2 = Conference::create([
            'title' => 'Second Conference',
            'description' => 'Description for Second Conference',
            'lecturer' => 'Jane Smith',
            'date' => '2023-02-20',
            'time' => '11:00',
            'address' => '456 Oak Ave, Othertown',
        ]);

        $this->command->info('ConferencesSeeder seeded.');
    }
}
