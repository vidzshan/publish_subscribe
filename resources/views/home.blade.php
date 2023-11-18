@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
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

<!-- Add a Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Your App Name</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts/create">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/people/index">People</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/profile">Profile</a>
            </li>
            <!-- You can add more navigation links as needed -->
        </ul>
    </div>
</nav>

<!-- Add Home Page Content -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <!-- Your Home Page Content Goes Here -->
            <h1>Welcome to Your App</h1>
            <p>This is a brief description of your app and its features.</p>
        </div>
    </div>
</div><h2>Messages</h2>
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




<!-- Add a Footer -->
<footer class="bg-dark text-light text-center py-3">
    &copy; 2023 Your App Name. All rights reserved.
</footer>
@endsection


