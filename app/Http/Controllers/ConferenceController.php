<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ConferenceController extends BaseController
{
    public function show($id)
    {
        $conference = new Conference('1', 'Conference Title', 'Conference Description');
        return view('conference.show', ['conference' => $conference]);
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
