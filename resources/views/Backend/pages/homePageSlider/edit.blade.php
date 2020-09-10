@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updateSlider', $slider->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Slider Title</label>
                <input type="text" name="title" class="form-control" value="{{ $slider->title }}">
            </div>

            <div class="form-group">
                <label>Slider Description</label>
                <input type="text" name="description" class="form-control" value="{{ $slider->description }}">
            </div>
      

           

            <div class="form-group">
                <label>Background Image</label>
                @if ( $slider->backGround_Image == NULL )
                No Image Uploaded
                @else 
              <img src="{{ asset('images/slider/' . $slider->backGround_Image ) }}" width="100"><br><br>
              @endif
                <input type="file" name="icon_image" class="form-control-file" value="{{ $slider->backGround_Image	 }}">
            </div>

            

            <div class="form-group">
                <input type="submit" name="addCategory" value="Add Category" class="btn btn-primary">
            </div>

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection