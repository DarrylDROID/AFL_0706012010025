@extends('layout.mainlayout')

@section('title','Brand')

@section('main_content')
 
    <div class="container">
    <h1 class="neonText">Brand</h1>
    <table class="table table-striped table-dark table-hover">
        <tr>
            <th> NO <i class="fa-solid fa-list-ol fa-fade ms-1"></i></th>
            <th> BRAND CODE <i class="fa-solid fa-code fa-fade ms-1"></i></th>
            <th> BRAND NAME <i class="fa-solid fa-input-text fa-fade ms-1"></i></th>
            <th> FOUNDER <i class="fa-solid fa-person fa-fade ms-1"></i></th>
            <th> DATE FOUND <i class="fa-solid fa-calendar fa-fade ms-1"></i></th>
            <th> HEADQUARTERS <i class="fa-solid fa-building fa-fade ms-1"></i></th>
            <th> IMAGE <i class="fa-solid fa-image fa-fade ms-1"></i></th>
            <th class="d-flex align-items-center justify-content-center"> ACTIONS <i class="fa-solid fa-circle-exclamation fa-fade ms-1"></i></th>
        </tr>

        <div class="container"><a href="{{ route('brand.create') }}"><button type="button" class="btn btn-primary mb-2">Create<i class="fa-duotone fa-cars fa-flash ms-1"></i></button></a> </div>
    
    @foreach ($brands as $brand)
    <tr>
    <td>{{ $loop->index+1 }}</td>
    <td>{{ $brand['brand_code'] }}</td>
    <td>{{ $brand['brand_name'] }}</td>
    <td>{{ $brand['founder'] }}</td>
    <td>{{ $brand['date_found'] }}</td>
    <td>{{ $brand['headquarters'] }}</td>
    <td>
        <img src="{{ asset('storage/'. $brand['image'] ) }}" width="75" alt="">
    </td>
    <td> 
        <div class="d-grid d-md-flex justify-content-center">
            <a href="{{ route('brand.show', $brand->brand_code) }}"><button type="button" class="btn btn-info me-md-2">Show<i class="fa-duotone fa-car fa-flash ms-1"></i></button></a>
            <a href="{{ route('brand.edit', $brand->brand_code) }}"><button type="button" class="btn btn-warning me-md-2">Edit<i class="fa-duotone fa-car-wrench fa-flash ms-1"></i></button></a>
            <form action="{{ route('brand.destroy', $brand->brand_code) }}" method="post">
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
