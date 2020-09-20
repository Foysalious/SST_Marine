@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updateProtfolio', $ship->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $ship->name }}">
            </div>

            <div class="form-group">
                <label> Category</label>
                <input type="text" name="category" class="form-control" value="{{ $ship->category }}">
            </div>

            <div class="form-group">
                <label>Vessel Name</label>
                <input type="text" name="vessel_name" class="form-control" value="{{ $ship->vessel_name }}">
            </div>

            <div class="form-group">
                <label>Owner Name</label>
                <input type="text" name="owner" class="form-control" value="{{ $ship->owner }}">
            </div>

            <div class="form-group">
                <label>Builder Name</label>
                <input type="text" name="builder" class="form-control" value="{{ $ship->builder }}">
            </div>

            <div class="form-group">
                <label>Class</label>
                <input type="text" name="class" class="form-control" value="{{ $ship->class }}">
            </div>

            <div class="form-group">
                <label>Build Date</label>
                <input type="date" name="build_date" class="form-control" value="{{ $ship->build_date }}">
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" id="summary-ckeditor" name="description" placeholder="Please Insert Description"> {{$ship->description}} </textarea>
            </div>

            <div class="form-group">
                <label>Features</label>
                <textarea class="form-control" id="text" name="features" placeholder="Please Insert Features">{{ $ship->features }}</textarea>
            </div>

            <div class="form-group">
                <label>Image</label>
                @if ( $ship->image == NULL )
                No Image Uploaded
                @else 
              <img src="{{ asset('images/protfolio/' . $ship->image ) }}" width="100"><br><br>
              @endif
                <input type="file" name="image" class="form-control-file" value="{{ $ship->image	 }}">
            </div>

          

            <div class="form-group">
                <input type="submit" name="addSlider" value="Add Category" class="btn btn-primary">
            </div>

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection