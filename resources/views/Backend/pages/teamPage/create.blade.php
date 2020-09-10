@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('storeTeam') }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Please Insert Title">
            </div>

            <div class="form-group">
                <label>Designation</label>
                <input type="text" name="designation" class="form-control" placeholder="Please Insert Paragraph">
            </div>

            <div class="form-group">
                <label>Facebook</label>
                <input type="text" name="facebook" class="form-control" placeholder="Please Insert Facebook Profile URL">
            </div>

            <div class="form-group">
                <label>LinkedIn</label>
                <input type="text" name="linkedin" class="form-control" placeholder="Please Insert LinkedIn Profile URL">
            </div>

            <div class="form-group">
                <label>Twitter</label>
                <input type="text" name="twitter" class="form-control" placeholder="Please Insert Twitter Profile URL">
            </div>

            <div class="form-group">
                <label>Team</label>
                <select name="team">
                    <option value="Management">Management</option>
                    <option value="Engineers">Engineers</option>
                   
                  </select>
            </div>

            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control-file">
            </div>

            <div class="form-group">
                <input type="submit" name="addSlider" value="Add Team Member" class="btn btn-primary">
            </div>

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection