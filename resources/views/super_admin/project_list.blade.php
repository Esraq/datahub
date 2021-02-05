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


<th><center><b>Project Name</b></center></th>
<th><center><b>Start Date</b></center></th>
<th><center><b>End Date</b></center></th>
<th><center>Current Status</center></th>
<th><center>Budget</center></th>
<th><center>Organization</center></th>
<th colspan="3"><center>Action</center></th>


</tr>

@foreach($projects as $project)
<tr>

<td><center>{{$project->project_name}}</center></td>
<td><center>{{$project->starting_date}}</center></td>
<td><center>{{$project->end_date}}</center></td>
<td><center>{{$project->current_status}}</center></td>
<td><center>{{$project->budget}}</center></td>
<td><center>{{$project->organization_id}}</center></td>

<td><center><a class="btn btn-xs btn-warning" href="/search-doc/{{$project->id}}" role="button">view</a></center></td>


<td>

{!! Form::open(['url' => URL::to('/project/'.$project->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">Delete</button>
    {!! Form::close() !!}
</td>


<td>
<a href="{{ URL::to('/project/'.$project->id.'/edit') }}" class="btn btn-primary mb-1">Edit</a>
</td>

<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
             </div>


@endsection