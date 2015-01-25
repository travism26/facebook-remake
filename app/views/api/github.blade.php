@extends('layouts.default')

@section('content')
    <h1>Github repo</h1>
    @if(isset($repo->{'message'}))
        <h3>Repo not found</h3>
    @else
        <div class="row">
            <ul>
                @foreach( $repo as $item )
                    <li><a href="https://github.com/{{ $item->{'owner'}->{'login'} }}/{{ $item->{'name'} }}" target="_blank">{{ $item->{'name'} }}</a></li>
                @endforeach
            </ul>
        </div>
    @endif


    <hr>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Title</h3>
                    </div>
                    <div class="panel-body">
                        <p>description</p>
                        <ul class="list-inline">
                            <li>Followers: 4</li>
                            <li>Favorites: 1337</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Title</h3>
                    </div>
                    <div class="panel-body">
                        <p>second app made</p>
                        <ul class="list-inline">
                            <li>Followers: 9</li>
                            <li>Favorites: 0</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop