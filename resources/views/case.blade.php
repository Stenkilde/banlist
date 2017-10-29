@extends('layout.master')

@section('content')
    <h1>
        {{$case->ban_name}}
        <small class="text-muted">{{$case->facebook_id}}</small>
    </h1>
@endsection
