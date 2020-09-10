@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('storeProject') }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            

            <div class="form-group">
                <label>Project Image</label>
                <input type="file" name="project_image" class="form-control-file">
            </div>

            <div class="form-group">
                <input type="submit" name="addSlider" value="Add Project" class="btn btn-primary">
            </div>

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection