@extends('layouts.default')
@section('content')
<h1>Edit your status</h1>
{{ $status->id }}
{{ $status->body }}
{{ $status->user_id }}
@stop