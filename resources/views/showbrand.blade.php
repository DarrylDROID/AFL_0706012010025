@extends('layout.mainlayout')

@section('title','Brand')

@section('pagetitle','Detail Brand')

@section('main_content')
    <div class="mt-4 p-5 bgshow text-light">
        <a href="{{ URL::previous() }}" class="btn btn-warning mb-3"> <i class="fas fa-arrow-left"></i> Go Back</a>
        <h5><b><i class="fa-light fa-code fa-xl me-2"></i>Brand Code : </b>{{ $brands['brand_code'] }}</h5>
        <h5><b><i class="fa-light fa-input-text fa-xl me-2"></i>Brand Name : </b>{{ $brands['brand_name'] }}</h5>
        <h5><b><i class="fa-light fa-person fa-xl me-2"></i>Founder : </b>{{$brands['founder']}}</h5>
        <h5><b><i class="fa-light fa-calendar fa-xl me-2"></i>Date Found : </b>{{$brands['date_found']}}</h5>
        <h5><b><i class="fa-light fa-building fa-xl me-2"></i>Headquarters : </b>{{$brands['headquarters']}}</h5>
        <h5><b><i class="fa-light fa-image fa-xl me-2"></i>Image :</b><br><img src="{{ asset('storage/'. $brands['image'] ) }}" class="mt-3" width="150" alt="brandimage"></h5>

            <h3 class="mt-3"><b>List Car</b></h3>

            <table class="table table-striped table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">No<i class="fa-light fa-list-ol fa-fade ms-2"></i></th>
                        <th scope="col">Code<i class="fa-light fa-code fa-fade ms-2"></i></th>
                        <th scope="col">Car Name<i class="fa-light fa-car fa-fade ms-2"></i></th>
                        <th scope="col">Type<i class="fa-light fa-text fa-fade ms-2"></i></th>
                        <th scope="col">Engine<i class="fa-light fa-engine fa-fade ms-2"></i></th>
                        <th scope="col">Price<i class="fa-light fa-dollar fa-fade ms-2"></i></th>
                        <th scope="col">Image<i class="fa-light fa-image fa-fade ms-2"></i></th>
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