@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
          @if (session()->has('success'))

          <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                   Role  Changed Successfully
                  </div>
@endif
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <table class="table table-striped">
<thead>
<tr>



<th><center><b>Name</b></center></th>
<th><center><b>Email</b></center></th>
<th><center><b>Role</b></center></th>
<th><center><b></b></center></th>
<th><center><b></b></center></th>
<th><center><b></b></center></th>
<th><center><b></b></center></th>




</tr>

@foreach($users as $user)
<tr>



<td><center><b>{{$user->name}}</b></center></td>
<td><center><b>{{$user->email}}</b></center></td>
<td><center><b>{{$user->type}}</b></center></td>
<td><center><a class="btn btn-xs btn-warning" href="/role_management/{{$user->id}}/super_admin" role="button">Admin</a></center></td>
<td><center><a class="btn btn-xs btn-success" href="/role_management/{{$user->id}}/whef" role="button">WHEF</a></center></td>
<td><center><a class="btn btn-xs btn-danger" href="/role_management/{{$user->id}}/asaup" role="button">ASAUP</a></center></td>
<td><center><a class="btn btn-xs btn-info" href="/role_management/{{$user->id}}/bay" role="button">BayBD</a></center></td>








<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
             </div>






















@endsection