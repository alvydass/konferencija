<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Conference;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class EmployeeController extends BaseController
{
    public function index(): View
    {

        $conferences = Conference::all();

        return view('employee.index', compact('conferences'));
    }
}
