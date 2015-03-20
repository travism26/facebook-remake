@extends('layouts.default')

@section('content')
    <h1>Github repo</h1>
    @if(isset($repo->{'message'}))
        <h3>Repo not found</h3>
    @else
        {{--<div class="row">--}}
        {{--<ul>--}}
        {{--@foreach( $repo as $item )--}}
        {{--<li>--}}
        {{--<a href="https://github.com/{{ $item['owner']['login'] }}/{{ $item['name'] }}"--}}
        {{--target="_blank">{{ $item['name'] }}</a>--}}
        {{--</li>--}}
        {{--@endforeach--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--@endif--}}

        <hr>
        <br>
        @foreach(array_chunk($repo, 3) as $items)
            <div class="row">
                @foreach($items as $item)
                    <div class="col-md-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a href="https://github.com/{{ $item['owner']['login'] }}/{{ $item['name'] }}"
                                       target="_blank">{{ $item['name'] }}</a>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <p>{{ $item['description'] }}</p>
                                <ul class="list-inline">
                                    <li>Watchers: {{ $item['watchers_count'] }}</li>
                                    <li>Stars: {{ $item['stargazers_count'] }}</li>
                                </ul>

                                <ul class="list-inline">
                                    <li>Language: {{ $item['language'] }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

    @endif

@stop