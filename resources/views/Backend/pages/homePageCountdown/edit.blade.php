@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('updateCountdown', $countdown->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Projects Done</label>
                <input type="text" name="projects_done" class="form-control" value={{$countdown->projects_done}}>
            </div>

            <div class="form-group">
                <label>Offshore Projects</label>
                <input type="text" name="offshore_projects" class="form-control" value={{$countdown->offshore_projects}} >
            </div>

            <div class="form-group">
                <label>Expert Engineers</label>
                <input type="text" name="expert_engineers" class="form-control" value={{$countdown->expert_engineers}}>
            </div>

            <div class="form-group">
                <label>Man Power</label>
                <input type="text" name="man_power" class="form-control" value={{$countdown->man_power}} >
            </div>

            <div class="form-group">
                <input type="submit" name="addSlider" value="Update Count Down" class="btn btn-primary">
            </div>

            

            


        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection