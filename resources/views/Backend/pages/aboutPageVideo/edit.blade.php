@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updateAboutVideo', $video->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Video Link</label>
                <input type="text" name="link" class="form-control" value="{{ $video->link }}">
            </div>

           
            

            <div class="form-group">
                
                <input type="submit" name="addCategory" value="Update Videos" class="btn btn-primary">

            </div>

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection