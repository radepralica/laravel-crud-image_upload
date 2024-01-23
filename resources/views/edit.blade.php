@extends('layouts.layout')
@section('head-title','Edit')
@section('body-title','Edit')
@section('content')

<form action="{{route('person.update',['person'=>$person])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <input type="text" class="form-control" name="firstName" placeholder="Upišite Ime"
                    value="{{$person->firstName}}"> <br>
                @error('firstName')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="lastName" placeholder="Upišite Prezime"
                    value="{{$person->lastName}}"> <br>
                @error('lastName')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="birthYear" placeholder="Upišite Godinu Rođenja"
                    value="{{$person->birthYear}}"><br>
                @error('birthYear')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror<br>
                <input type="text" class="form-control" name="country" placeholder="Upišite Državu"
                    value="{{$person->country}}"> <br>
                @error('country')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="city" placeholder="Upišite Grad"
                    value="{{$person->city}}">
                <br>
                @error('city')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="streetAddress" placeholder="Upišite Adresu"
                    value="{{$person->streetAddress}}">
                @error('streetAddress')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror<br>

                <input type="file" class="form-control" name="countryImage" placeholder="Učitajte sliku"
                    value="{{$person->countryImage}}">
                @error('countryImage')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror<br>

                <button class="btn btn-info offset-4">Edit</button>
            </div>
        </div>
    </div>
</form>
<div>
</div>

@endsection