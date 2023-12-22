<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Conference;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $conference1 = Conference::find(4671);
        $conference2 = Conference::find(4672);

        $client1 = Client::create([
            'first_name' => 'Client1',
            'last_name' => 'One',
            'email' => 'client1@example.com',
            // Add other client attributes
        ]);

        $client2 = Client::create([
            'first_name' => 'Client2',
            'last_name' => 'Two',
            'email' => 'client2@example.com',
            // Add other client attributes
        ]);

        $client3 = Client::create([
            'first_name' => 'Client3',
            'last_name' => 'Three',
            'email' => 'client3@example.com',
            // Add other client attributes
        ]);

        $client4 = Client::create([
            'first_name' => 'Client4',
            'last_name' => 'Four',
            'email' => 'client4@example.com',
        ]);


        $conference1->clients()->attach([$client1->id, $client2->id]);
        $conference2->clients()->attach([$client3->id, $client4->id]);

        $this->command->info('Clients seeded.');
    }
}
