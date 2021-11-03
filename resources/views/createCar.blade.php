@extends('layout.mainlayout')

@section('title', 'Car')

@section('pagetitle', 'Create Car')

@section('main_content')

    <div class="row">
        <div class="col">
            <form action="{{ route('car.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="car">Car Name:</label>
                    <input type="text" class="form-control" id="car" name="car">
                </div>
                <br>
                <div class="form-group">
                    <label for="type">Type:</label>
                    <select name="type" class="custom-select">
                        <option value="SEDAN">SEDAN</option>
                        <option value="COUPE">COUPE</option>
                        <option value="SPORTS">SPORTS</option>
                        <option value="SUV">SUV</option>
                        <option value="HATCHBACK">HATCHBACK</option>
                        <option value="MINIVAN">MINIVAN</option>
                        <option value="PICKUP">PICKUP</option>
                        <option value="TRUCK">TRUCK</option>
                        <option value="MPV">MPV</option>
                        <option value="CROSSOVER">CROSSOVER</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="merk">Brand:</label>
                    <select name="merk" class="custom-select">
                        <option value="" selected disabled hidden>Choose here</option>
                            @foreach ($brands as $brand)
                            <option value="{{ $brand['brand_code'] }}">{{ $brand['brand_name'] }}</option>
                            @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="engine">Engine:</label>
                    <input type="text" class="form-control" id="engine" name="engine">
                </div>
                <br>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <br>
                {{-- <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                </div>
                <br> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ URL::previous() }}" class="btn btn-danger"> <i class="fas fa-arrow-left"></i> Go Back</a>
            </form>
        </div>
    </div>
@endsection