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
                <input type="text" name="title" class="form-control" placeholder="Please Insert Title">
            </div>

            <div class="form-group">
                <label>Solution Text</label>
                <select name="services" >
                    <option value="Ship Design">Ship Design</option>
                    <option value="Engineering Services">Engineering Services</option>
                    <option value="Consultancy">Consultancy</option>
                  
                  </select>
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