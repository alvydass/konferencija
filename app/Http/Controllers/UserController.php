<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Conference;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends BaseController
{
    public function index(): View
    {
        $clients = Client::all();

        //dd($clients);

        return view('admin.user.index', compact('clients'));
    }

    public function edit($id) : View
    {
        $user = Client::findOrFail($id);

        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {

    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ]);

    $user = Client::findOrFail($id);

    // Update the user details
    $user->update($validatedData);

    return redirect()->route('user');
    }
}
