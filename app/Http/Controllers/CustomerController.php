<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class CustomerController extends Controller
{
    public function list()
    {
        $user = User::all();

        return view('customers', [
            'users' => $user,
        ]);
    }
}
