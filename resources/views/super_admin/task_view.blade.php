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


<th><center><b>Name</b></center></th>
<th><center><b>Designation</b></center></th>
<th><center><b>Organization</b></center></th>
<th><center>Start Date</center></th>
<th><center>End Date</center></th>
<th><center>Task</center></th>
<th><center>Comment</center></th>



</tr>

@foreach($users as $user)
<tr>

<td><center>{{$user->name}}</center></td>
<td><center>{{$user->designation}}</center></td>
<td><center>{{$user->organization_name}}</center></td>
<td><center>{{$user->start_date}}</center></td>
<td><center>{{$user->end_date}}</center></td>
<td><center><?php


echo $user->description;

?>

</center></td>
<td><center>{{$user->comment}}</center></td>







<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
             </div>


@endsection