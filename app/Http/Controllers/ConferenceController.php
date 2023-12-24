<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Conference;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
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
        $conferences = Conference::all();
        return view('admin.conference.conferences', compact('conferences'));
    }

    public function create()
    {
        return view('conference.create');
    }

    public function store(Request $request)
    {
       /* // Validate incoming request
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'lecturer' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'address' => 'required|string|max:255',
        ]);*/

        // Redirect back if validation fails
        /*if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }*/

        // Create a new conference instance
        $newConference = Conference::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'lecturer' => $request->input('lecturer'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'address' => $request->input('address'),
            // Add other conference attributes if needed
        ]);

        // Redirect to the conference list view if successful
        return redirect()->route('conference.list')->with('success', 'Conference created successfully!');
    }

    public function update(Request $request)
    {
        // Find the conference by its ID
        $conferenceId = $request->input('conference_id');
        $conference = Conference::findOrFail($conferenceId);

        // Update conference attributes with request data
        $conference->title = $request->input('title');
        $conference->description = $request->input('description');
        $conference->lecturer = $request->input('lecturer');
        $conference->date = $request->input('date');
        $conference->time = $request->input('time');
        $conference->address = $request->input('address');
        // Add/update other conference attributes if needed

        // Save the updated conference
        $conference->save();

        // Redirect to the conference list view if successful
        return redirect()->route('conference.list')->with('success', 'Conference updated successfully!');
    }

    public function edit($encodedConference)
    {
        $conference = json_decode(base64_decode($encodedConference));

        return view('conference.edit', compact('conference'));
    }

    public function delete($id)
    {
      $conference = Conference::findOrFail($id);
        $conference->delete();

        return redirect()->route('conference.list')->with('success', 'Conference deleted successfully!');
    }

}
