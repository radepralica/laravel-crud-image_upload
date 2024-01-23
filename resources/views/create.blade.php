@extends('layouts.layout')
@section('head-title','Create')
@section('body-title','Create')
@section('content')

<form action="{{route('person.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <input type="text" class="form-control" name="firstName" placeholder="Upišite Ime"
                    value="{{old('firstName')}}"> <br>
                @error('firstName')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="lastName" placeholder="Upišite Prezime"
                    value="{{old('lastName')}}"> <br>
                @error('lastName')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="birthYear" placeholder="Upišite Godinu Rođenja"
                    value="{{old('birthYear')}}"><br>
                @error('birthYear')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror<br>
                <input type="text" class="form-control" name="country" placeholder="Upišite Državu"
                    value="{{old('country')}}"> <br>
                @error('country')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="city" placeholder="Upišite Grad" value="{{old('city')}}">
                <br>
                @error('city')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control" name="streetAddress" placeholder="Upišite Adresu"
                    value="{{old('streetAddress')}}">
                @error('streetAddress')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror<br>

                <input type="file" class="form-control" name="countryImage" placeholder="Učitajte sliku"
                    value="{{old('countryImage')}}">
                @error('countryImage')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror<br>

                <button class="btn btn-info offset-4">Create</button>
            </div>
        </div>
    </div>
</form>
<div>
</div>

@endsection
