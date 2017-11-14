@extends('layout.master')

@section('content')
    <div style="display: flex; align-items: center;">
        <h1 style="flex: 1 100%;">{{$case->name}}</h1>
        <a style="flex: 1 100%; text-align: right;" href="/post/{{$case->id}}">Tilføj ny post</a>
    </div>
    <div class="row">
        @foreach ($case->bans as $case)
            <div class="card" style="width: 20rem; margin: 0 12px 12px;">
                <img class="card-img-top" src="{{$case->img_src}}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{$case->type}} - fb {{$case->facebook_id}}</h4>
                    <p class="card-text">{{$case->description}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection