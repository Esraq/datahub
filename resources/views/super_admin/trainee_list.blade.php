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

<th><center><b>Email</b></center></th>

<th><center><b>Phone</b></center></th>


<th><center><b>Address</b></center></th>

<th colspan="2"></th>


</tr>

@foreach($trainee as $doc)
<tr>




<td><center>{{$doc->name}}</center></td>
<td><center>{{$doc->email}}</center></td>
<td><center>{{$doc->phone}}</center></td>
<td><center>{{$doc->address}}</center></td>

<td>

{!! Form::open(['url' => URL::to('/trainee/'.$doc->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">Delete</button>
    {!! Form::close() !!}

    
    






</td>


<td>
<a href="{{ URL::to('/trainee/'.$doc->id.'/edit') }}" class="btn btn-primary mb-1">Edit</a>

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