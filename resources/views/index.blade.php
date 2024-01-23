@extends('layouts.layout')
@section('head-title','Naš Tim')
@section('body-title','Naš Tim')
@section('button-new')
<a href="{{ route('person.create') }}" class="btn btn-info offset-5 ">Novi Član</a>
@endsection
@section('content')

@if (session()->has('success-create'))
<p class="container alert alert-success text-center">
    {{session('success-create')}}
</p>
@endif
<div class="container">
    <div class="row ">
        @foreach ( $persons as $person )
        <div style="margin-left: 5rem" class="col-3  pb-5">

            <div class="card" style="width: 18rem;">
                <img src="/images/{{$person->countryImage}}" class="card-img-top img-tumbnail img-responsive"
                    style="height: 10rem" alt="Fotografija osobe">
                <div class="card-body">
                    <h5 class="card-title text-center">{{$person->firstName}} {{$person->lastName}}</h5><br>
                    <p class="card-text">Godina rođenja: {{$person->birthYear}}</p>
                    <p class="card-text">Grad: {{$person->city}}</p>
                    <p class="card-text">Adresa:{{$person->streetAddress}}</p>
                    <p class="card-text">Država: {{$person->country}}</p>
                    <div class="container">

                        <div class="container">
                            <div class="row">
                                <div class="col-6 ">
                                    <form action="{{route('person.edit',['person'=>$person])}}" method="post">
                                        @csrf
                                        <button class="btn btn-warning offset-2">Edit</button>
                                    </form>

                                </div>
                                <div class="col-6 ">
                                    <form action="{{route('person.delete',['person'=>$person])}}" method="post">
                                        @csrf
                                        <button class="btn btn-danger offset-2">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection