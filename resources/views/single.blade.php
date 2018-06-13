@extends('layout.master')

@section('content')
    <div style="display: flex; align-items: center;">
        <h1 style="flex: 1 100%;">{{$case->name}}</h1>
        <p style="flex: 1 100%;">{{$case->facebook_id}}</p>
        <a style="flex: 1 100%; text-align: right;" href="/post/{{$case->id}}">Tilføj ny post</a>
    </div>
    <div class="row">
        @foreach ($case->bans as $ban)
            <div class="card" style="width: 20rem; margin: 0 12px 12px;">
                <img class="card-img-top" src="{{$case->img_src}}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{$ban->type}}</h4>
                    <p class="card-text">{{$ban->description}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection