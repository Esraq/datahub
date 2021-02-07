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
              <center>
              <table class="table table-striped">
<thead>
<tr>




<th><center><b>Name</b></center></th>

<th><center><b>Designation</b></center></th>

<th><center><b>Month</b></center></th>


<th><center><b>Year</b></center></th>

<th><center><b>Salary</b></center></th>

<th colspan="2"></th>

 
</tr>

@foreach($salary as $salary)
<tr>

<td><center>{{$salary->name}}</center></td> 
<td><center>{{$salary->designation}}</center></td> 
<td><center>{{$salary->month}}</center></td>
<td><center>{{$salary->year}}</center></td>
<td><center>{{$salary->salary}}</center></td> 
<td>

{!! Form::open(['url' => URL::to('/salary/'.$salary->id),"method"=>"DELETE"]) !!} 
<button type="submit" class="btn btn-danger mb-1">Delete</button>
    {!! Form::close() !!}



</td>


<td>
<a href="{{ URL::to('/salary/'.$salary->id.'/edit') }}" class="btn btn-primary mb-1">Edit</a> 

</td>







<!-- Modal content -->

</tr>
@endforeach
</table>
            </center>                      
                </div>
              </div>
             </div>






















@endsection