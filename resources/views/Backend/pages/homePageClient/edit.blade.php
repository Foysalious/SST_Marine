@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updateClients', $client->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            
             <div class="form-group">
                <label>Update Client Image</label>
                @if ( $client->image == NULL )
                No Image Uploaded
                @else 
              <img src="{{ asset('images/client/' . $client->image ) }}" width="100"><br><br>
              @endif
                <input type="file" name="image" class="form-control-file" value="{{ $client->image	 }}">
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