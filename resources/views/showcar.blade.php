@extends('layout.mainlayout')

@section('title','Car')

@section('pagetitle','Detail Car')

@section('main_content')
    <div class="mt-4 p-5 bgshow text-light">
        <a href="{{ URL::previous() }}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i> Go Back</a>
        <h1>{{$cars['car']}}</h1>
        <p><b>Car Name : </b>{{ $cars['car'] }}</p>
        <p><b>Type : </b>{{ $cars['type'] }}</p>
        <p><b>Brand Name : </b>{{$cars['merk']}}</p>
        <p><b>Engine : </b>{{$cars['engine']}}</p>
        <p><b>Price : </b>{{$cars['price']}}</p>
        <p><b>Image : </b><br><img src="{{ asset('storage/'. $cars['image'] ) }}" class="rounded-circle" width="350" alt=""></p>
    </div>
@endsection