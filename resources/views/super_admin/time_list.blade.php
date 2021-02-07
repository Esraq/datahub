@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
          @if (session()->has('success'))

          <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                   Time Schedule Operated Successfully !!
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




<th><center><b>Month</b></center></th>

<th><center><b>Year</b></center></th>
<th><center><b>Action</b></center></th>



<th colspan="2"></th>


</tr>

@foreach($times as $time)
<tr>




<td><center>{{$time->month}}</center></td>
<td><center>{{$time->year}}</center></td>
<td><center>
              <form action="{{ route('time_module.destroy',$time->id) }}" method="POST">
       
                    <a class="btn btn-primary" href="{{ route('time_module.edit',$time->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
              </form
</center></td>







<!-- Modal content -->

</tr>
@endforeach
</table>
            </center>                      
                </div>
              </div>

             </div>


@endsection