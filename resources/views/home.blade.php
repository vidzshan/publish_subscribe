@if(!isset($noFooter))
@include('layouts/nav-bar')
@endif

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <d iv class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                   @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Add Home Page Content -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <!-- Your Home Page Content Goes Here -->
            <h1>Welcome to PSSoftware</h1>
            <p>You can able to read and create posts. Share your ideas with your friends. 
                According to the subscription you allow to make constraints like reduce 
                unnecessory posts show only posts which you are subscribed people's.</p>

            <h2>Messages</h2>
            @if ($messages)
                @if (count($messages) > 0)
                    @foreach ($messages as $message)
                        <div class="message">
                            <p>{{ $message->content }}</p>
                            <p>Posted by: {{ $message->user->name }}</p>
                        </div>
                    @endforeach
                @else
                    <p>No messages to display.</p>
                @endif
            @else
                <p>No messages to display.</p>
            @endif

            <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Message</a>
        </div>
    </div>
</div>





<!-- Add a Footer -->
<footer class="bg-dark text-light text-center py-3">
    &copy; 2023 Your App Name. All rights reserved.
</footer>
@endsection


