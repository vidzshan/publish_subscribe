<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PeopleController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('people.index', compact('users'));
    }
}
