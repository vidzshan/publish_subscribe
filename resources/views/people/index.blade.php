@extends('layouts.app')

@section('content')
<div class="container">
    <h1>People</h1>
    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }}
                @if (auth()->check() && auth()->user()->id !== $user->id)
                    <button id="subscription-button" data-user-id="{{ $user->id }}" data-subscribed="false">
                        Subscribe
                    </button>
                @endif
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>

<script>
    // Add a click event listener to the button
    const subscriptionButtons = document.querySelectorAll('#subscription-button');

    subscriptionButtons.forEach(button => {
        button.addEventListener('click', function () {
            const userId = button.getAttribute('data-user-id');
            const isSubscribed = button.getAttribute('data-subscribed');

            // You can make an AJAX request to the server to toggle the subscription status here.
            // Once you receive a response, update the button text accordingly.
            
            // This example just toggles the button text locally
            if (isSubscribed === 'true') {
                button.textContent = 'Subscribe';
                button.setAttribute('data-subscribed', 'false');
            } else {
                button.textContent = 'Subscribed';
                button.setAttribute('data-subscribed', 'true');
            }
        });
    });
</script>
@endsection
