@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updateDescription', $description->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Description 1</label>
                <textarea class="form-control" id="summary-ckeditor" name="description_1" >{{ $description->description_1 }}</textarea>
            </div>

            <div class="form-group">
                <label> Description 1</label>
                <textarea class="form-control" id="text-ckeditor" name="description_2" >{{ $description->description_2 }}</textarea>
            </div>

           
            <div class="form-group">
                <input type="submit" name="addSlider" value="Update Description" class="btn btn-primary">
            </div>

            

    
        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection