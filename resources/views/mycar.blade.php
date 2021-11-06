@extends('layout.mainlayout')

@section('title','MyCar')

@section('main_content')
   
    <div class="container">
    <h1 class="neonText">Car</h1>
    <table class="table table-striped table-dark table-hover">
        <tr>
            <th> NO </th>
            <th> CODE </th>
            <th> CAR NAME </th>
            <th> TYPE </th>
            <th> BRAND NAME </th>
            <th> ENGINE </th>
            <th> PRICE </th>
            <th> IMAGE </th>
            <th class="d-flex justify-content-center"> ACTIONS </th>
        </tr>

        <div class="container"><a href="{{ route('car.create') }}"><button type="submit" class="btn btn-primary mb-2">Create</button></a> </div>
     
    @foreach ($cars as $car)
    <tr>
    <td>{{ $loop->index+1 }}</td>
    <td>{{ $car['code'] }}</td>
    <td>{{ $car['car'] }}</td>
    <td>{{ $car['type'] }}</td>  
    <td><a href="{{ route('brand.show', $car->brand->brand_code) }}">
    {{ $car->brand->brand_name }}
    </a>
    </td>
    <td>{{ $car['engine'] }}</td>
    <td>{{ $car['price'] }}</td>
    <td>
        <img src="{{ asset('storage/'. $car['image'] ) }}" width="100" alt="">
    </td>
    <td class="text-center"> 
    <div class="d-grid d-md-flex justify-content-center">
        <a href="{{ route('car.show', $car->code) }}"><button type="button" class="btn btn-info me-md-2">Show</button></a>
        <a href="{{ route('car.edit', $car->id) }}"><button type="button" class="btn btn-warning me-md-2">Edit</button></a>
        <form action="{{ route('car.destroy', $car->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
    </td>
    </tr>
    @endforeach
    </table>
    <br>
</div>
@endsection
