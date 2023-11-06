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
                <a class="nav-link" href="/posts">Posts</a>
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
</div>

<!-- Add a Footer -->
<footer class="bg-dark text-light text-center py-3">
    &copy; 2023 Your App Name. All rights reserved.
</footer>
@endsection
