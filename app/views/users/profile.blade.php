@extends('layouts.default')
@section('content')
    <h1>Your Profile</h1>
    {{--{{ dd($user) }}--}}
    <!-- Username Form Input -->
    {{ $user->username }}
    {{ $user->email }}
@stop