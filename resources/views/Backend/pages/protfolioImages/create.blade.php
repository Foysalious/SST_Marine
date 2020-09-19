@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('storeProtfolioImage') }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Title</label>
                <textarea  name="description" class="form-control" id="text" placeholder="Please Insert Image Description"></textarea>
            </div>

            <div class="form-group">
                <label>Image </label>
                <input type="file" name="image" class="form-control-file">
            </div>

            <div class="form-group">
                <label>Select Protfolio Category</label>
                <select name="protfolio_id" class="form-control">
                  <option>Please Select Protfolio Category</option>
                  @foreach ( App\Protfolio::orderBy('title', 'asc')->get() as $protfolio )
                    <option value="{{ $protfolio->id }}">{{ $protfolio->title }}</option>
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