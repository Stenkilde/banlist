@extends('layout.master')

@section('content')
    <h1>Tilføj case</h1>
    <form action="/create" method="POST">
        <div class="form-group">
            <label for="name">Navn</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Indsæt navn" required>
        </div>
        <div class="form-group">
            <label for="facebookID">Facebook Id</label>
            <input type="text" class="form-control" name="facebookId" id="facebookID" placeholder="Facebook Id">
        </div>
        <div class="form-group">
            <label for="type">Case Type</label>
            <select class="form-control" name="type" id="type" required>
                <option value="">-- Vælg type--</option>
                <option value="Advarsel">Advarsel</option>
            </select>
        </div>
        <div class="form-group">
            <label for="photoSrc">Billede</label>
            <input type="text" class="form-control" name="img" id="photoSrc" placeholder="Billede URL">
            <br>
            <button type="submit" class="btn btn-primary">Upload billede</button>
        </div>
        <div class="form-group">
            <label for="descriptionField">Kommentar</label>
            <textarea name="description" class="form-control" id="descriptionField" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="reason">Vælg paragraf</label>
            <select class="form-control" id="reason">
                <option value="">-- Vælg Paragraf --</option>
                @foreach ($reasons as $r)
                    <option value="{{$r->id}}">{{$r->reason}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
