@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updateTechnology', $tech->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ $tech->title }}">
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" value="{{ $tech->description }}">
            </div>

        
            <div class="form-group">
                <label>Icon Image</label>
                @if ( $tech->icon == NULL )
                No Image Uploaded
                @else 
              <img src="{{ asset('images/solution/' . $tech->icon ) }}" width="100"><br><br>
              @endif
                <input type="file" name="icon" class="form-control-file" value="{{ $tech->icon	 }}">
            </div>

            

            <div class="form-group">
                <input type="submit" name="addCategory" value="Update Technology" class="btn btn-primary">
            </div>

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection