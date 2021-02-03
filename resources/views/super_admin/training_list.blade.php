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




<th><center><b>Training Name</b></center></th>
<th><center><b>Start Date</b></center></th>
<th><center><b>End Date</b></center></th>
<th><center>Budget</center></th>
<th><center>Trainer</center></th>
<th><center>Organization</center></th>
<th></th>
<th></th>
<th></th>
<th></th>


</tr>

@foreach($trainings as $programme)
<tr>




<td><center>{{$programme->name}}</center></td>
<td><center>{{$programme->start_date}}</center></td>
<td><center>{{$programme->end_date}}</center></td>
<td><center>{{$programme->budget}}</center></td>
<td><center>{{$programme->trainer}}</center></td>
<td><center>{{$programme->organization_id}}</center></td>
<td><center><a class="btn btn-xs btn-success" href="/report/{{$programme->id}}" role="button">Excel</a></center></td>
<td><center><a class="btn btn-xs btn-secondary" href="/word/{{$programme->id}}" role="button">Word</a></center></td>
<td><center><a class="btn btn-xs btn-warning" href="/search-trainee/{{$programme->id}}" role="button">view</a></center></td>




<td>

{!! Form::open(['url' => URL::to('/training/'.$programme->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">Delete</button>
    {!! Form::close() !!}

    
    






</td>


<td>
<a href="{{ URL::to('/training/'.$programme->id.'/edit') }}" class="btn btn-primary mb-1">Edit</a>

</td>



<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
             </div>






















@endsection