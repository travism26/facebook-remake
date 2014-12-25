@extends('layouts.default')
@section('content')
    <h2>All Users</h2>

    @foreach($users->chunk(4) as $userSet)
        <div class="row users">
            @foreach($userSet as $user)
                <div class="col-md-3 user-block">
                    @include('layouts.partials.avatar')

                    <h4 class="user-block-username">{{ $user->username; }}</h4>
                </div>
            @endforeach
        </div>
    @endforeach
@stop