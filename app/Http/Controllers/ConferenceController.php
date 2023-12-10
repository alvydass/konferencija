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

    public function list()
    {
        $conference = new Conference(1, 'AI threat', 'Call Arnie');

        $conferences = [$conference];
        return view('admin.conference.conferences', compact('conferences'));
    }

    public function create()
    {
        return view('conference.create');
    }

    public function store(Request $request)
    {
        // Validate and store conference data from the form
        // You can use $request->input('field_name') to retrieve form data

        // Example code to store data in a Conference model
        $conference = new Conference();
        $conference->title = $request->input('title');
        $conference->description = $request->input('description');
        $conference->save();

        // Redirect to the success page
        return redirect()->route('save-success');
    }

    public function edit(Request $request, $encodedConference)
    {
        $decodedConference = json_decode(base64_decode($encodedConference), true);
        $conference = new Conference($decodedConference['id'], $decodedConference['title'], $decodedConference['description']);

        // Pass the $conference object to your edit view
        return view('conference.edit', compact('conference'));
    }

    public function delete($id)
    {
       /* $conference = Conference::findOrFail($id);
        $conference->delete();*/

        return redirect()->route('save-success');
    }

}
