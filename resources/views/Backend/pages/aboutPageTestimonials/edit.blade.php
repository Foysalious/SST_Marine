@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updateTestimonial', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Company Name</label>
                <input type="text" name="name" class="form-control" value="{{ $testimonial->name }}">
            </div>

            <div class="form-group">
                <label>Company Testimonials</label>
                <input type="text" name="comment" class="form-control" value="{{ $testimonial->comment }}">
            </div>
      

           

            <div class="form-group">
                <label>Company Logo</label>
                @if ( $testimonial->image == NULL )
                No Image Uploaded
                @else 
              <img src="{{ asset('images/testimonial/' . $testimonial->image ) }}" width="100"><br><br>
              @endif
                <input type="file" name="image" class="form-control-file" value="{{ $testimonial->image	 }}">
            </div>

            

            <div class="form-group">
                
                <input type="submit" name="addCategory" value="Update Testimonials" class="btn btn-primary">

            </div>

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection