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



    
<th><center><b>Organization ID</b></center></th>
<th><center><b>Organization Name</b></center></th>
<th></th>


<th colspan="2"><center></center></th>
</tr>

@foreach($organizations as $organization)
<tr>



<td><center>{{$organization->id}}</center></td>
<td><center>{{$organization->organization_name}}</center></td>



<td>

{!! Form::open(['url' => URL::to('/organization/'.$organization->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger">Delete</button>
    {!! Form::close() !!}









</td>


<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
             </div>






















@endsection