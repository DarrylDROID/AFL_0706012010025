@extends('layout.mainlayout')

@section('title','MyCar')

@section('main_content')
   
    <div class="container">
    <h1 class="neonText">Car</h1>
    <table class="table table-striped table-dark table-hover">
        <tr>
            <th> NO <i class="fa-solid fa-list-ol fa-fade ms-1"></i></th>
            <th> CODE <i class="fa-solid fa-code fa-fade ms-1"></i></th>
            <th> CAR NAME <i class="fa-solid fa-car fa-fade ms-1"></i></th>
            <th> TYPE <i class="fa-solid fa-text fa-fade ms-1"></i></th>
            <th> BRAND NAME <i class="fa-solid fa-id-card fa-fade ms-1"></i></th>
            <th> ENGINE <i class="fa-solid fa-engine fa-fade ms-1"></i></th>
            <th> PRICE <i class="fa-solid fa-dollar fa-fade ms-1"></i></th>
            <th> IMAGE <i class="fa-solid fa-image fa-fade ms-1"></i></th>
            <th class="d-flex align-items-center justify-content-center"> ACTIONS <i class="fa-solid fa-circle-exclamation fa-fade ms-1"></i></th>
        </tr>

        <div class="container"><a href="{{ route('car.create') }}"><button type="submit" class="btn btn-primary mb-2">Create<i class="fa-duotone fa-cars fa-flash ms-1"></i></button></a> </div>
     
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
        <a href="{{ route('car.show', $car->code) }}"><button type="button" class="btn btn-info me-md-2">Show<i class="fa-duotone fa-car fa-flash ms-1"></i></button></a>
        <a href="{{ route('car.edit', $car->id) }}"><button type="button" class="btn btn-warning me-md-2">Edit<i class="fa-duotone fa-car-wrench fa-flash ms-1"></i></button></a>
        <form action="{{ route('car.destroy', $car->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete<i class="fa-duotone fa-car-crash fa-flash ms-1"></i></button>
        </form>
    </div>
    </td>
    </tr>
    @endforeach
    </table>
    <br>
</div>
@endsection
