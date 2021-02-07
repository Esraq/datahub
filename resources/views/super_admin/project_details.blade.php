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

<th colspan="2"><center><b></b></center></th>



</tr>

@foreach($projects as $doc)
<tr>




<td><center>{{$doc->name}}</center></td>



<td> <center><a class="btn btn-xs btn-warning" target="_blank"  href="../public/images/{{$doc->filename}}" role="button">view</a></center></td>
<td>

{!! Form::open(['url' => URL::to('/project_docs/'.$doc->id),"method"=>"DELETE"]) !!}
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