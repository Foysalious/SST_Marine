@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updateProject', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            
             <div class="form-group">
                <label>Update Project Image</label>
                @if ( $project->project_image == NULL )
                No Image Uploaded
                @else 
              <img src="{{ asset('images/project/' . $project->project_image ) }}" width="100"><br><br>
              @endif
                <input type="file" name="project_image" class="form-control-file" value="{{ $project->project_image	 }}">
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