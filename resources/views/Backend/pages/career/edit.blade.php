@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updatecareer', $career->id) }}" method="POST" enctype="multipart/form-data">
            @csrf 
            
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control"  name="title" value="{{ $career->title }}">
            </div>

            <div class="form-group">
                <label>Career Description</label>
                <textarea class="form-control" id="summary-ckeditor" name="description_1" >{{ $career->description_1 }}</textarea>
            </div>

            <div class="form-group">
                <label>Image</label>
                @if ( $career->image == NULL )
                No Image Uploaded
                @else 
              <img src="{{ asset('images/career/' . $career->image ) }}" width="100"><br><br>
              @endif
                <input type="file" name="image" class="form-control-file" value="{{ $career->image	 }}">
            </div>

         
           
            <div class="form-group">
                <input type="submit" name="addSlider" value="Update Description" class="btn btn-primary">
            </div>

            

    
        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection