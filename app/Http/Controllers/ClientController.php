<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ClientController extends BaseController
{
    public function index()
    {
        $conferences = [
            (object)[
                'id' => 1,
                'title' => 'Pirmoji konferencija',
                'description' => 'Pirmosios konferencijos aprašymas',
                // Kiti laukai...
            ],
            (object)[
                'id' => 2,
                'title' => 'Antroji konferencija',
                'description' => 'Antrosios konferencijos aprašymas',
                // Kiti laukai...
            ],
            // Kitos hardcoded konferencijos...
        ];

        return view('client.index', compact('conferences'));
    }
}
