<?php

namespace App\Models;

class Conference
{
    public $id;
    public $title;
    public $description;
    public $clients = [];

    public function __construct($id, $title, $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
    }

    public function addClient($client)
    {
        $this->clients[] = $client;
    }

    public function getClients()
    {
        return $this->clients;
    }
}
