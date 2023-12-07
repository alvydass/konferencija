<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Conference;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    public function index()
    {

        return view('admin.index');
    }
}
