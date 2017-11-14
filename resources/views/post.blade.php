@extends('layout.master')

@section('content')
    <h1>Tilføj post</h1>
    <form action="/post/create" method="POST">
        <div class="form-group">
            <label for="facebook_id">Facebook Id</label>
            <input type="text" class="form-control" name="facebook_id" id="facebook_id" placeholder="Facebook Id">
        </div>
        <div class="form-group">
            <label for="type">Case Type</label>
            <select class="form-control" name="type" id="type" required>
                <option value="">-- Vælg type--</option>
                <option value="Advarsel">Advarsel</option>
            </select>
        </div>
        <div class="form-group">
            <label for="img_src">Billede</label>
            <input type="text" class="form-control" name="img_src" id="img_src" placeholder="Billede URL">
            {{--  <br>
            <button type="submit" class="btn btn-primary">Upload billede</button>  --}}
        </div>
        <div class="form-group">
            <label for="description">Kommentar</label>
            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="reason">Vælg paragraf</label>
            <select class="form-control" name="reason_id" id="reason_id">
                <option value="">-- Vælg Paragraf --</option>
                @foreach ($reasons as $r)
                    <option value="{{$r->id}}">{{$r->reason}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

        {{ csrf_field() }}
        <input type="hidden" name="case_id" value="{{$id}}">
    </form>
@endsection
