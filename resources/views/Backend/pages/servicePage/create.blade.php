@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('storeServices') }}" method="POST" enctype="multipart/form-data">
            @csrf      
            
            <div class="form-group">
              <label>Title</label>
              <input class="form-control"  name="title"> 
          </div>

            <div class="form-group">
                <label>Description For Services</label>
                <textarea class="form-control"  id="text" name="services"></textarea>
            </div>

           

            <div class="form-group">
                <input type="submit" name="addSlider" value="Add Category" class="btn btn-primary">
            </div>

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection