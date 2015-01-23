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
@stop