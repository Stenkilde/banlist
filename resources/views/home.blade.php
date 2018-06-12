@extends('layout.master')

@section('content')
    <h5>
        Velkommen {{$user->firstname}}
    </h5>
    
    {{--  <div class="row search-input">
        <form class="search col-md-6 offset-md-3" action="/search" method="POST">
            <div class="input-group">
                <input type="search" class="form-control" name="search" id="search" placeholder="Søg i alle bans">
                <div class="input-group-btn">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
            {{ csrf_field() }}
        </form>
    </div>  --}}

    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Navn</th>
                <th scope="col">Admin</th>
                <th scope="col">Dato</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($cases as $case)
                <tr>
                    <td scope="row">{{$case->name}}</td>
                    <td scope="row">{{$case->user->username}}</td>
                    <td scope="row">{{$case->created_at}}</td>
                    <td scope="row">
                        <div class="btn-group btn-group-sm">
                            <a class="btn btn-primary" href="/case/{{$case->id}}"><i class="fa fa-eye"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{ $cases->links() }}
@endsection
