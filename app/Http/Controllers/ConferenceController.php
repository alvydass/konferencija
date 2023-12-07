<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Conference;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ConferenceController extends BaseController
{
    public function show($id)
    {
        $conference = new Conference(1, 'AI threat', 'Call Arnie');

        //dd($showClients);


        return view('conference.show', compact('conference'));
    }

    public function showWithClients($id)
    {
        $conference = new Conference(1, 'AI threat', 'Call Arnie');
        $client1 = new Client('Simas', 'Palaukys', 'simka@one.lt');
        $client2 = new Client('Laurynas', 'Blynas', 'destroyer999@one.lt');

        $conference->addClient($client1);
        $conference->addClient($client2);

        //dd($showClients);


        return view('conference.show-with-clients', compact('conference'));
    }

    public function register($id)
    {
        // Fetch conference details based on $id if needed
        $conference = new Conference('2', 'Titlas', 'descriptionas');

        // Return the view for the registration form
        return view('conference.register', compact('conference'));
    }

    public function submitRegistration(Request $request)
    {

        return "Success";
    }
}
