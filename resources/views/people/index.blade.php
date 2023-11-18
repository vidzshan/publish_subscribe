@extends('layouts.app')

@section('content')
<div class="container">
    <h1>People</h1>
    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }}
                <button>Subscribe</button>
            </li>
        @endforeach
    </ul>
</div>
@endsection
