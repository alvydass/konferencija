<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function index()
    {
        $client1 = new User('Simas', 'Palaukys', 'simka@one.lt');
        $client2 = new User('Laurynas', 'Blynas', 'destroyer999@one.lt');


        $users = [$client1, $client2];

        return view('admin.user.index', compact('users'));
    }

    public function edit($id)
    {
        $user = new User('Simas', 'Palaukys', 'simka@one.lt');

        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
        ]);

        return redirect()->route('save-success');
    }
}
