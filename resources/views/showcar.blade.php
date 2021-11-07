@extends('layout.mainlayout')

@section('title','Car')

@section('pagetitle','Detail Car')

@section('main_content')
    <div class="mt-4 p-5 bgshow text-light">
        <a href="{{ URL::previous() }}" class="btn btn-warning mb-3"> <i class="fas fa-arrow-left"></i> Go Back</a>
        <h5><b>Car Name : </b>{{ $cars['car'] }}</h5>
        <h5><b>Type : </b>{{ $cars['type'] }}</h5>
        <h5><b>Brand Name : </b>{{$cars['merk']}}</h5>
        <h5><b>Engine : </b>{{$cars['engine']}}</h5>
        <h5><b>Price : </b>{{$cars['price']}}</h5>
        <h5><b>Image : </b><br><img src="{{ asset('storage/'. $cars['image'] ) }}" class="rounded-circle" width="350" alt=""></h5>
    </div>
@endsection