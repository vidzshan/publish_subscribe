<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subscription;

class PeopleController extends Controller
{
    public function index()
    {
        $users = User::all();

        // Initialize an array to hold the subscription status for each user
        $isSubscribed = [];

        if (auth()->check()) {
            $authUserId = auth()->user()->id;

            // Retrieve the subscription status for each user
            foreach ($users as $user) {
                $subscription = Subscription::where('user_id', $user->id)
                    ->where('subscriber_id', $authUserId)
                    ->first();

                $isSubscribed[$user->id] = $subscription ? $subscription->status : false;
            }
        }

        return view('people.index', compact('users', 'isSubscribed'));
    }
}
