@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('storeCountdown') }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Projects Done</label>
                <input type="text" name="projects_done" class="form-control" placeholder="Please Insert Done Projects">
            </div>

            <div class="form-group">
                <label>Offshore Projects</label>
                <input type="text" name="offshore_projects" class="form-control" placeholder="Please Insert amount of Offshore Projects">
            </div>

            <div class="form-group">
                <label>Expert Engineers</label>
                <input type="text" name="expert_engineers" class="form-control" placeholder="Please Insert amount of Expert Engineers">
            </div>

            <div class="form-group">
                <label>Man Power</label>
                <input type="text" name="man_power" class="form-control" placeholder="Please Insert Man Power">
            </div>

            <div class="form-group">
                <input type="submit" name="addSlider" value="Add Count Down" class="btn btn-primary">
            </div>
            

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection