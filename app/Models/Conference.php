<?php

namespace App\Models;

class Conference
{
    public $id;
    public $title;
    public $description;
    public $lecturer;
    public $date;
    public $time;
    public $address;
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

    /**
     * @return mixed
     */
    public function getLecturer()
    {
        return $this->lecturer;
    }

    /**
     * @param mixed $lecturer
     */
    public function setLecturer($lecturer): void
    {
        $this->lecturer = $lecturer;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }


}
