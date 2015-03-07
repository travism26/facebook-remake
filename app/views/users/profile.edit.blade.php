@extends('layouts.default')
@section('content')
    <h1>Edit Profile</h1>
    {{--{{ dd($user) }}--}}
    <!-- Username Form Input -->
    {{ $user->username }}
    {{ $user->email }}
@stop