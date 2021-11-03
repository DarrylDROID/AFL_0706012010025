@extends('layout.mainlayout')

@section('title', 'Brand')

@section('pagetitle', 'Create Brand')

@section('main_content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('brand.store') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="brand_code">Code:</label>
                  <input type="text" class="form-control" id="brand_code" name="brand_code">
              </div>
                <div class="form-group">
                    <label for="brand_name">Brand Name:</label>
                    <input type="text" class="form-control" id="brand_name" name="brand_name">
                </div>
                <div class="form-group">
                    <label for="founder">Founder:</label>
                    <input type="text" class="form-control" id="founder" name="founder">
                </div>
                <div class="form-group">
                    <label for="date_found">Date Found:</label>
                    <input type="text" class="form-control" id="date_found" name="date_found">
                </div>
                <div class="form-group">
                    <label for="headquarters">Headquarters:</label>
                    <input type="text" class="form-control" id="headquarters" name="headquarters">
                </div>
                <br>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ URL::previous() }}" class="btn btn-danger"> <i class="fas fa-arrow-left"></i> Go Back</a>
            </form>
        </div>
    </div>
</div>

@endsection