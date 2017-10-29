@extends('layout.master')

@section('content')
    <div class="row search-input">
        <form class="search col-md-6 offset-md-3 ng-pristine ng-valid ng-scope" role="search" action="/search" method="POST">
            <div class="input-group">
                <input type="search" class="form-control ng-pristine ng-valid ng-touched" ng-model="banSearch" placeholder="Søg i alle bans">
                <div class="input-group-btn">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>

    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Type</th>
                <th scope="col">Navn</th>
                <th scope="col">Admin</th>
                <th scope="col">Paragraf</th>
                <th scope="col">Dato</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($bans as $ban)
                <tr>
                    <th scope="row">{{$ban->type}}</td>
                    <td>{{$ban->ban_name}}</td>
                    <td>{{$ban->user->firstname}}</td>
                    <td>§{{$ban->reason_id}}</td>
                    <td>{{$ban->created_at}}</td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <a class="btn btn-primary" href="/case/{{$ban->id}}"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-success" href="/edit/1282"><i class="fa fa-pencil"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
