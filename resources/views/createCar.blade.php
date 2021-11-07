@extends('layout.mainlayout')

@section('title', 'Car')

@section('pagetitle', 'Create Car')

@section('main_content')

<div class="container text-light">
    <div class="row">
        <div class="col">
            <form action="{{ route('car.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="code">Code :</label>
                    <input type="text" class="form-control" id="code" name="code" required>
                </div>
                <div class="form-group">
                    <label for="car">Car Name:</label>
                    <input type="text" class="form-control" id="car" name="car" required>
                </div>
                <div class="form-group">
                    <label for="type">Type:</label>
                    <br>
                    <select name="type" class="custom-select" required>
                        <option value="SEDAN">SEDAN</option>
                        <option value="COUPE">COUPE</option>
                        <option value="SPORTS">SPORTS</option>
                        <option value="SUV">SUV</option>
                        <option value="MUSCLE">MUSCLE</option>
                        <option value="HATCHBACK">HATCHBACK</option>
                        <option value="MINIVAN">MINIVAN</option>
                        <option value="PICKUP">PICKUP</option>
                        <option value="TRUCK">TRUCK</option>
                        <option value="MPV">MPV</option>
                        <option value="CROSSOVER">CROSSOVER</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="merk">Brand Name:</label>
                    <br>
                    <select name="merk" class="custom-select" required>
                        <option value="" selected disabled hidden>Choose here</option>
                            @foreach ($brands as $brand)
                            <option value="{{ $brand['brand_code'] }}">{{ $brand['brand_name'] }}</option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="engine">Engine:</label>
                    <input type="text" class="form-control" id="engine" name="engine" required>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary mb-5 me-1"><i class="fa-solid fa-check me-1"></i>Submit</button>
                <a href="{{ URL('/car') }}" class="btn btn-danger mb-5"> <i class="fas fa-arrow-left"></i> Go Back</a>
            </form>
        </div>
    </div>
</div>
@endsection