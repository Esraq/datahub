@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
          @if (session()->has('success'))

          <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                   Action Completed Successfully
                  </div>
@endif
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <table class="table table-striped">
<thead>
<tr>



<th><center><b>Image</b></center></th>    
<th><center><b>Name</b></center></th>
<th><center><b>Email</b></center></th>
<th><center><b>Phone</b></center></th>
<th><center><b>Designation</b></center></th>
<th><center><b>Address</b></center></th>
<th><center><b>Organization</b></center></th>

<th colspan="2"><center>Action</center></th>



</tr>

@foreach($users as $user)
<tr>



<td><center><b><img src="/public/images/{{$user->filename}}" height="70px" width="70px"></b></center></td>    
<td><center><b>{{$user->name}}</b></center></td>
<td><center><b>{{$user->email}}</b></center></td>
<td><center><b>{{$user->phone}}</b></center></td>
<td><center><b>{{$user->designation}}</b></center></td>
<td><center><b>{{$user->address}}</b></center></td>
<td><center><b>{{$user->organization_name}}</b></center></td>





<td>

{!! Form::open(['url' => URL::to('/employee/'.$user->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">Delete</button>
    {!! Form::close() !!}

    
    






</td>


<td>
<a href="{{ URL::to('/employee/'.$user->id.'/edit') }}" class="btn btn-primary mb-1">Edit</a>

</td>

<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
             </div>






















@endsection