@extends('Backend.template.layout');
@section('main-content')

<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">

         
        <!-- Category Table Start -->
        <table id="myTable" class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Description</th>
              <th scope="col">Image</th>
              <th scope="col">Protfolio Name</th>

              <th scope="col">Action</th>

            </tr>
          </thead>
          <tbody>
 

              @foreach( $protfolios as $protfolio )
                  <tr>
                    <th scope="row"> {{ $protfolio->id }} </th>
                    <td>{!! $protfolio->description !!}</td>
                    
                    <td>
                        @if ( $protfolio->image == NULL )
                            No Image Attached
                        @else
                            <img src="{{ asset('images/protfolio/' . $protfolio->image ) }}" width="100">
                        @endif
                    </td>
                    <td>{{ $protfolio->protfolios->title }}</td>

                   

                    
                    
                  
                   
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('editProtfolioImage', $protfolio->id) }}" class="btn btn-success btn-sm">Update</a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCategory{{ $protfolio->id }}">Delete</button>
                        </div>

                  <!-- Modal -->
								<div class="modal fade" id="deleteCategory{{ $protfolio->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Do You want to delete this protfolio?</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                             <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                          <form action="{{ route('deleteProtfolioImage', $protfolio->id ) }}" method="POST">
                                              @csrf
                                              <button type="submit" class="btn btn-danger">Delete</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                    </td>
                </tr>
               
              @endforeach		    

          </tbody>
        </table>
        <!-- Slider Table End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->


</div><!-- br-section-wrapper -->

@endsection