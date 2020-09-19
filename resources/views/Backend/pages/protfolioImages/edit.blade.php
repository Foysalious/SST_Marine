@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updateProtfolioImage', $protfolio->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label> Description</label>
                <textarea type="text" name="description" id="text" class="form-control" >{!! $protfolio->description !!}</textarea>
            </div>

           

           

            <div class="form-group">
                <label> Image</label>
                @if ( $protfolio->image == NULL )
                No Image Uploaded
                @else 
              <img src="{{ asset('images/protfolio/' . $protfolio->image ) }}" width="100"><br><br>
              @endif
                <input type="file" name="image" class="form-control-file" value="{{ $protfolio->image	 }}">
            </div>

            <div class="form-group">protfolios
                <label>Protfolio Category</label>
                <select name="protfolio_id">
                    <option>Please Select Protfolio Category</option>
                    @foreach ( App\Protfolio::orderBy('id', 'asc')->get() as $protfolioimg)
                    <option value="{{ $protfolioimg->id }}" @if( $protfolioimg->id==$protfolio->protfolios->id ) selected @endif>{{ $protfolioimg->title }}</option>
                    @endforeach
                   
                  </select>
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