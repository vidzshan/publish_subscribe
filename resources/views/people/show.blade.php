@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Profile</h1>
    <p>Name: {{ $user->name }}</p>
    <button id="subscription-button" data-user-id="{{ $user->id }}" data-subscribed="{{ $isSubscribed ? 'true' : 'false' }}">
        {{ $isSubscribed ? 'Subscribed' : 'Subscribe' }}
    </button>
</div>

<script>
    // Add a click event listener to the button
    const subscriptionButton = document.getElementById('subscription-button');
    
    subscriptionButton.addEventListener('click', function () {
        const userId = subscriptionButton.getAttribute('data-user-id');
        const isSubscribed = subscriptionButton.getAttribute('data-subscribed');

        // You can make an AJAX request to the server to toggle the subscription status here.
        // Once you receive a response, update the button text accordingly.

        if (isSubscribed === 'true') {
            subscriptionButton.textContent = 'Subscribe';
            subscriptionButton.setAttribute('data-subscribed', 'false');
        } else {
            subscriptionButton.textContent = 'Subscribed';
            subscriptionButton.setAttribute('data-subscribed', 'true');
        }
    });
</script>
@endsection
