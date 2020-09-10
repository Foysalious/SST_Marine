@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('storeContacts') }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" name="number" class="form-control" placeholder="Please Insert Companys Contact Number">
            </div>

            <div class="form-group">
                <label>Contact Email</label>
                <input type="text" name="email" class="form-control" placeholder="Please Insert Companys Email">
            </div>

            <div class="form-group">
                <label>Contact Address</label>
                <input type="text" name="address" class="form-control" placeholder="Please Insert Companys Contact Address">
            </div>

            <div class="form-group">
                <label>Facebook Link</label>
                <input type="text" name="facebook" class="form-control" placeholder="Please Insert Companys Facebook Link">
            </div>

            <div class="form-group">
                <label>Twitter Link</label>
                <input type="text" name="twitter" class="form-control" placeholder="Please Insert Companys Twitter Link">
            </div>

            <div class="form-group">
                <label>Instagram Link</label>
                <input type="text" name="instagram" class="form-control" placeholder="Please Insert Companys Instagram Link">
            </div>

            <div class="form-group">
                <label>LinkedIn Link</label>
                <input type="text" name="linkedin" class="form-control" placeholder="Please Insert Companys LinkedIn Link">
            </div>

            
            <div class="form-group">
                <label>Youtube Link</label>
                <input type="text" name="youtube" class="form-control" placeholder="Please Insert Companys Youtube Link">
            </div>


            <div class="form-group">
                <input type="submit" name="addSlider" value="Add Anchor" class="btn btn-primary">
            </div>
            

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection