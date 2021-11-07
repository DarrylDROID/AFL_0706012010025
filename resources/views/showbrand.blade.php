@extends('layout.mainlayout')

@section('title','Brand')

@section('pagetitle','Detail Brand')

@section('main_content')
    <div class="mt-4 p-5 bgshow text-light">
        <a href="{{ URL::previous() }}" class="btn btn-warning mb-3"> <i class="fas fa-arrow-left"></i> Go Back</a>
        <h5><b>Brand Code : </b>{{ $brands['brand_code'] }}</h5>
        <h5><b>Brand Name : </b>{{ $brands['brand_name'] }}</h5>
        <h5><b>Founder : </b>{{$brands['founder']}}</h5>
        <h5><b>Date Found : </b>{{$brands['date_found']}}</h5>
        <h5><b>Headquarters : </b>{{$brands['headquarters']}}</h5>

            <h3 class="mt-3"><b>List Car</b></h3>

            <table class="table table-striped table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Code</th>
                        <th scope="col">Car Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Engine</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    @php $index = 1 @endphp
                    @foreach ($brands->cars as $car)
                        <tr>
                            <th scope="row">{{ $index }}</th>
                            @php $index++ @endphp
                            <td>{{ $car['code'] }}</td>
                            <td>{{ $car['car'] }}</td>
                            <td>{{ $car['type'] }}</td>
                            <td>{{ $car['engine'] }}</td>
                            <td>{{ $car['price'] }}</td>
                            <td><img src="{{ asset('storage/'. $car['image'] ) }}" width="100" alt=""></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection