@extends('layout.mainlayout')

@section('title', 'Car')

@section('pagetitle', 'Edit Car')

@section('main_content')
        <div class="row">
            <div class="col">
                <form action="{{ route('car.update', $cars->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Car Name:</label>
                        <input type="text" class="form-control" name="car" value="{{ $cars->car }}" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Type:</label>
                        <select name="type" class="custom-select">
                            <option hidden value="{{ $cars->type }}">
                                {{ $cars->type }}
                            </option>
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
                            @foreach ($brands as $brand)
                                @if ($brand['brand_code'] == $cars['price'])
                                    <option value="{{ $brand['brand_code'] }}" selected>{{ $brand['brand_name'] }}
                                    </option>
                                @else
                                    <option value="{{ $brand['brand_code'] }}">{{ $brand['brand_name'] }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="engine">Engine:</label>
                        <input type="text" class="form-control" id="engine" name="engine" value="{{ $cars->engine }}" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $cars->price }}" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary me-1">Submit</button>
                    <a href="{{ URL('/car') }}" class="btn btn-danger"> <i class="fas fa-arrow-left"></i> Go Back</a>
                </form>
            </div>
        </div>

@endsection