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
        {{ Form::open(['method' => 'PATCH', 'route' => ['profile.edit', $user->id ]]) }}
            {{ Form::hidden('user_id', $user->id) }}
            <button type="submit" class="btn btn-primary">Update</button>
        {{ Form::close() }}
@stop