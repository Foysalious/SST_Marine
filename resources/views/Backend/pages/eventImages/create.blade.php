@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('storeeventImage') }}" method="POST" enctype="multipart/form-data">
            @csrf                	
           

            <div class="form-group">
                <label>Image </label>
                <input type="file" name="image" class="form-control-file">
            </div>

            <div class="form-group">
                <label>Select Event Category</label>
                <select name="event_id" class="form-control">
                  <option>Please Select Event Category</option>
                  @foreach ( App\Events::orderBy('title', 'asc')->get() as $event )
                    <option value="{{ $event->id }}">{{ $event->title }}</option>
                  @endforeach
                </select>
              </div>


            <div class="form-group">
                <input type="submit" name="addSlider" value="Add Protfolio Category" class="btn btn-primary">
            </div>

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection