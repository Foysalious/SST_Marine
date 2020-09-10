@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updateServices', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ $service->title }}">
            </div>

           

            <div class="form-group">
                <label>Team</label>
                <select name="services">
                    <option value="Ship Design" {{ $service->services == 'Ship Design' ? 'selected' : '' }}>Ship Design</option>
                    <option value="Engineering Services" {{ $service->services == 'Engineering Services' ? 'selected' : '' }}>Engineering Services</option>
                    <option value="Consultancy" {{ $service->services == 'Consultancy' ? 'selected' : '' }}>Consultancy</option>
                   
                  </select>
            </div>
      

           

            

            <div class="form-group">
                <input type="submit" name="addCategory" value="Update team" class="btn btn-primary">
            </div>

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection