@extends('layouts.default')
@section('content')
    <h2>All Users</h2>

    @foreach($users as $user)
        <li>
            {{ $user->username; }}
        </li>
    @endforeach
@stop