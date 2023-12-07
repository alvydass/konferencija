<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Conference;
use Illuminate\Routing\Controller as BaseController;

class ClientController extends BaseController
{
    public function index()
    {
        $conference = new Conference(1, 'AI threat', 'Call Arnie');
        $client1 = new Client('Simas', 'Palaukys', 'simka@one.lt');
        $client2 = new Client('Laurynas', 'Blynas', 'destroyer999@one.lt');

        $conference->addClient($client1);
        $conference->addClient($client2);
        $conferences = [$conference];

        return view('client.index', compact('conferences'));
    }
}
