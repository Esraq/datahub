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
              <table class="table table-striped" >
<thead>
<tr>





<th><center><b>Date</b></center></th>

<th></th>
<th></th>



</tr>

@foreach($items as $item)
<tr>




<td><center>{{$item->date}}</center></td>



<td> <center><a class="btn btn-xs btn-warning" target="_blank"  href="../public/images/{{$item->filename}}" role="button">File</a></center></td>
<td>


{!! Form::open(['url' => URL::to('/attendence/'.$item->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">Delete</button>
    {!! Form::close() !!}





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