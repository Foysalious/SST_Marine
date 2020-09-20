@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updateeventImage', $event->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
         

           

           

            <div class="form-group">
                <label> Image</label>
                @if ( $event->image == NULL )
                No Image Uploaded
                @else 
              <img src="{{ asset('images/event/' . $event->image ) }}" width="100"><br><br>
              @endif
                <input type="file" name="image" class="form-control-file" value="{{ $event->image	 }}">
            </div>

            <div class="form-group">protfolios
                <label>event Category</label>
                <select name="event_id">
                    <option>Please Select event Category</option>
                    @foreach ( App\Events::orderBy('id', 'asc')->get() as $protfolioimg)
                    <option value="{{ $protfolioimg->id }}" @if( $protfolioimg->id==$event->protfolios->id ) selected @endif>{{ $protfolioimg->title }}</option>
                    @endforeach
                   
                  </select>
            </div>
      
            

            

            <div class="form-group">
                <input type="submit" name="addCategory" value="Update Image" class="btn btn-primary">
            </div>

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection