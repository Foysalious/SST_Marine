@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updateTeam', $team->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $team->name }}">
            </div>

            <div class="form-group">
                <label>Designation</label>
                <input type="text" name="designation" class="form-control" value="{{ $team->designation }}">
            </div>

            <div class="form-group">
                <label>Facebook</label>
                <input type="text" name="facebook" class="form-control" value="{{ $team->facebook }}">
            </div>

            
            <div class="form-group">
                <label>LinkedIn</label>
                <input type="text" name="linkedin" class="form-control" value="{{ $team->linkedin }}">
            </div>

            <div class="form-group">
                <label>Twitter</label>
                <input type="text" name="twitter" class="form-control" value="{{ $team->twitter }}">
            </div>

            <div class="form-group">
                <label>Team</label>
                <select name="team">
                    <option value="Management" {{ $team->team == 'Management' ? 'selected' : '' }}>Management</option>
                    <option value="Engineers" {{ $team->team == 'Engineers' ? 'selected' : '' }}>Engineers</option>
                   
                  </select>
            </div>
      

           

            <div class="form-group">
                <label>Icon Image</label>
                @if ( $team->image == NULL )
                No Image Uploaded
                @else 
              <img src="{{ asset('images/team/' . $team->image ) }}" width="100"><br><br>
              @endif
                <input type="file" name="image" class="form-control-file" value="{{ $team->image	 }}">
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