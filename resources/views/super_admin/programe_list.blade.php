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




<th><center><b>Programme Title</b></center></th>
<th><center><b>Short Description</b></center></th>
<th><center><b>Year</b></center></th>

<th></th>
<th></th>



</tr>

@foreach($programmes as $programme)
<tr>




<td><center>{{$programme->name}}</center></td>
<td><center>{{$programme->short_description}}</center></td>
<td><center>{{$programme->year}}</center></td>





<td>

{!! Form::open(['url' => URL::to('/programme/'.$programme->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">Delete</button>
    {!! Form::close() !!}

    
    






</td>


<td>
<a href="{{ URL::to('/programme/'.$programme->id.'/edit') }}" class="btn btn-primary mb-1">Edit</a>

</td>

<!-- Modal content -->

</tr>
@endforeach
</table>
                                  
                </div>
              </div>
             </div>






















@endsection