<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function toggleSubscription(User $user)
{
    $isSubscribed = false; // Initialize as unsubscribed

    if (auth()->check()) {
        // Check if the authenticated user is subscribed to this user
        $subscription = Subscription::where('user_id', $user->id)
            ->where('subscriber_id', auth()->user()->id)
            ->first();

        if ($subscription) {
            $isSubscribed = $subscription->status;
            // Toggle the subscription status
            $subscription->update(['status' => !$subscription->status]);
        } else {
            Subscription::create([
                'user_id' => $user->id,
                'subscriber_id' => auth()->user()->id,
                'status' => true, // Initially subscribed
            ]);
            $isSubscribed = true;
        }
    }

    // Return a JSON response with the updated subscription status
    return response()->json(['subscribed' => $isSubscribed]);
}

    
}
