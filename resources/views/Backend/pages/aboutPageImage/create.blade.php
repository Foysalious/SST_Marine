@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('storeAboutImage') }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            

            <div class="form-group">
                <label>Background Image</label>
                <input type="file" name="image" class="form-control-file">
            </div>

            <div class="form-group">
                <input type="submit" name="addSlider" value="Add Image" class="btn btn-primary">
            </div>

            

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection