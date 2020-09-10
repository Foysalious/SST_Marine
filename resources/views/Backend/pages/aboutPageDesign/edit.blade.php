@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updateDesign', $design->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Design Title</label>
                <input type="text" name="title" class="form-control" value="{{ $design->title }}">
            </div>

            <div class="form-group">
                <label>Design Text</label>
                <input type="text" name="paragraph" class="form-control" value="{{ $design->paragraph }}">
            </div>
      

           

            <div class="form-group">
                <label>Icon Image</label>
                @if ( $design->icon_image == NULL )
                No Image Uploaded
                @else 
              <img src="{{ asset('images/solution/' . $design->icon_image ) }}" width="100"><br><br>
              @endif
                <input type="file" name="icon_image" class="form-control-file" value="{{ $design->icon_image	 }}">
            </div>

            

            <div class="form-group">
                <input type="submit" name="addCategory" value="Update Design" class="btn btn-primary">
            </div>

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection