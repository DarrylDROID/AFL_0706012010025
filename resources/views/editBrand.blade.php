@extends('layout.mainlayout')

@section('title', 'Brand')

@section('pagetitle', 'Edit Brand')

@section('main_content')

<body>
        <div class="row">
            <div class="col">
                <form action="{{ route('brand.update', $brands->brand_code) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label for="brand_code">Brand Code:</label>
                        <input type="text" class="form-control" id="brand_code" name="brand_code" value="{{ $brands->brand_code }}" required>
                    </div>
                    <div class="form-group">
                        <label for="brand_name">Brand Name:</label>
                        <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{ $brands->brand_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="lecturer">Founder:</label>
                        <input type="text" class="form-control" id="founder" name="founder" value="{{ $brands->founder }}" required>
                    </div>
                    <div class="form-group">
                        <label for="number_sks">Date Found:</label>
                        <input type="text" class="form-control" id="date_found" name="date_found" value="{{ $brands->date_found }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Headquarters:</label>
                        <input type="text" class="form-control" id="headquarters" name="headquarters" value="{{ $brands->headquarters }}" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary me-1">Submit</button>
                    <a href="{{ URL('/brand') }}" class="btn btn-danger"> <i class="fas fa-arrow-left"></i> Go Back</a>
                </form>
            </div>
        </div>
    </body>

@endsection