<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Conference;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConferenceController extends BaseController
{
    public function show(Conference $conference)
    {
        return view('conference.show', compact('conference'));
    }

    public function showWithClients( $conferenceId): View
    {
        $conference = Conference::with('clients')->findOrFail($conferenceId);
        return view('conference.show-with-clients', compact('conference'));
    }

    public function register($id): View
    {
        return view('conference.register', compact('id'));
    }

    public function submitRegistration(Request $request)
    {

      /*  $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:clients,email',
        ]);*/


        $conferenceId = $request->input('conference_id');
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $email = $request->input('email');


        $client = Client::create([
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
        ]);
      /*  $client = new Client();
        $client->first_name = $firstName;
        $client->last_name = $lastName;
        $client->email = $email;*/
        //$client->save(); // Save the new client to the database

        $conference = Conference::find($conferenceId);

        if ($conference) {
            $conference->clients()->attach($client);
            $conference->save();
        }

        $conferences = Conference::all();
        return view('client.index', compact('conferences'));
    }

    public function list()
    {
        $conference1 = new Conference(1, 'AI threat', 'Call Arnie');
        $conference1->setLecturer("Tadas Ivanauskas");
        $conference1->setAddress("Rugpieniu kaimas");
        $conference1->setDate("2023-10-11");
        $conference1->setTime("15:30:00");
        $client1 = new Client('Simas', 'Palaukys', 'simka@one.lt');
        $client2 = new Client('Laurynas', 'Blynas', 'destroyer999@one.lt');

        $conference1->addClient($client1);
        $conference1->addClient($client2);


        $conference2 = new Conference(2, 'Online learning', 'How to use Udemy');
        $conference2->setLecturer("Pranis Sasnauskas");
        $conference2->setAddress("Daujotu kaimas");
        $conference2->setDate("2023-11-14");
        $conference2->setTime("10:30:00");
        $client3 = new Client('Petras', 'Stauskas', 'piotr@one.lt');
        $client4 = new Client('Virga', 'Pac', 'vir@one.lt');

        $conference2->addClient($client3);
        $conference2->addClient($client4);
        $conferences = [$conference1, $conference2];

        return view('admin.conference.conferences', compact('conferences'));
    }

    public function create()
    {
        return view('conference.create');
    }

    public function store(Request $request)
    {
        // Validate

        $conference = new Conference();
        $conference->title = $request->input('title');
        $conference->description = $request->input('description');
        $conference->save();

        return redirect()->route('save-success');
    }

    public function edit($encodedConference)
    {
        $conference = json_decode(base64_decode($encodedConference));
        //dd($conference);

        return view('conference.edit', compact('conference'));
    }

    public function delete($id)
    {
       /* $conference = Conference::findOrFail($id);
        $conference->delete();*/

        return redirect()->route('save-success');
    }

}
