@extends('Backend.template.layout');
@section('main-content')

<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">

         
        <!-- Category Table Start -->
        <table id="myTable" class="table table-striped">
          <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Company Email</th>
              <th scope="col">Address</th>
              <th scope="col">facebook</th>
              <th scope="col">twitter</th>
              <th scope="col">instagram</th>
              <th scope="col">linkedin</th>
              <th scope="col">Youtube</th>
             
              <th scope="col">Action</th>

            </tr>
          </thead>
          <tbody>
 

              @foreach( $Contacts as $contact )
                  <tr>
                    <th scope="row"> {{ $contact->id }} </th>
                    <td>{{ $contact->number }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->facebook }}</td>
                    <td>{{ $contact->twitter }}</td>
                    <td>{{ $contact->instagram }}</td>
                    <td>{{ $contact->linkedin }}</td>
                    <td>{{ $contact->youtube }}</td>
                   
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('editContacts', $contact->id) }}" class="btn btn-success btn-sm">Update</a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCategory{{ $contact->id }}">Delete</button>
                        </div>

                  <!-- Modal -->
								<div class="modal fade" id="deleteCategory{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Do You want to delete this Solution?</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                             <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                          <form action="{{ route('deleteContacts', $contact->id ) }}" method="POST">
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