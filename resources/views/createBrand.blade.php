@extends('layout.mainlayout')

@section('title', 'Brand')

@section('pagetitle', 'Create Brand')

@section('main_content')

<div class="container text-light">
    <div class="row">
        <div class="col">
            <form action="{{ route('brand.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="brand_code">Brand Code:</label>
                  <input type="text" class="form-control" id="brand_code" name="brand_code" required>
              </div>
                <div class="form-group">
                    <label for="brand_name">Brand Name:</label>
                    <input type="text" class="form-control" id="brand_name" name="brand_name" required>
                </div>
                <div class="form-group">
                    <label for="founder">Founder:</label>
                    <input type="text" class="form-control" id="founder" name="founder" required>
                </div>
                <div class="form-group">
                    <label for="date_found">Date Found:</label>
                    <input type="text" class="form-control" id="date_found" name="date_found" required>
                </div>
                <div class="form-group">
                    <label for="headquarters">Headquarters:</label>
                    <input type="text" class="form-control" id="headquarters" name="headquarters" required>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary mb-5 me-1"><i class="fa-solid fa-check me-1"></i>Submit</button>
                <a href="{{ URL('/brand') }}" class="btn btn-danger mb-5"> <i class="fas fa-arrow-left"></i> Go Back</a>
            </form>
        </div>
    </div>
</div>

@endsection