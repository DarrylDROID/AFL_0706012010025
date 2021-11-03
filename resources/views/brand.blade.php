@extends('layout.mainlayout')

@section('title','Brand')

@section('main_content')
 
    <div class="container">
    <h1>Brand</h1>
    <table class="table table-striped table-dark table-hover">
        <tr>
            <th> NO </th>
            <th> CODE </th>
            <th> BRAND </th>
            <th> FOUNDER </th>
            <th> DATE FOUND </th>
            <th> HEADQUARTERS </th>
            <th class="d-flex justify-content-center"> ACTIONS </th>
        </tr>

        <div class="container"><a href="{{ route('brand.create') }}"><button type="button" class="btn btn-primary mb-2">Create</button></a> </div>
    
    @foreach ($brands as $brand)
    <tr>
    <td>{{ $loop->index+1 }}</td>
    <td>{{ $brand['brand_code'] }}</td>
    <td>{{ $brand['brand_name'] }}</td>
    <td>{{ $brand['founder'] }}</td>
    <td>{{ $brand['date_found'] }}</td>
    <td>{{ $brand['headquarters'] }}</td>

    <td> 
        <div class="d-grid d-md-flex justify-content-center">
            <a href="{{ route('brand.show', $brand->brand_code) }}"><button type="button" class="btn btn-info me-md-2">Show</button></a>
            <a href="{{ route('brand.edit', $brand->brand_code) }}"><button type="button" class="btn btn-warning me-md-2">Edit</button></a>
            <form action="{{ route('brand.destroy', $brand->brand_code) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </td>
    </tr>
    @endforeach
    </table>
</div>
@endsection
