@extends('layouts.default')
@section('content')
    <h2>All Users</h2>

    @foreach($users as $user)
        <div class="col-md-3">
            @include('layouts.partials.avatar')
            {{ $user->username; }}
        </div>
    @endforeach
@stop