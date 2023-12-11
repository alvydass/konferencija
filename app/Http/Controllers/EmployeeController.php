<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Conference;
use Illuminate\Routing\Controller as BaseController;

class EmployeeController extends BaseController
{
    public function index()
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

        return view('employee.index', compact('conferences'));
    }
}
