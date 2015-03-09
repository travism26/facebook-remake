@extends('layouts.default')
@section('content')
    <h1>Your Profile</h1>
    {{--{{ dd($user) }}--}}
    <dl class="dl-horizontal">
        <dt>Username</dt>
        <dd>{{ $user->username }}</dd>
        <dt>Email</dt>
        <dd>{{ $user->email }}</dd>
    </dl>
    {{ link_to_route('profile_edit', 'Edit') }}
@stop