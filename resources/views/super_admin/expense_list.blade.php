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




<th><center><b>Sector</b></center></th>

<th><center><b>Cost</b></center></th>

<th><center><b>Year</b></center></th>


<th><center><b>Amount</b></center></th>

<th><center><b>Comments</b></center></th>

<th colspan="2"></th>


</tr>

@foreach($expenses as $expense)
<tr>




<td><center>{{$expense->sector}}</center></td>
<td><center>{{$expense->month}}</center></td>
<td><center>{{$expense->year}}</center></td>
<td><center>{{$expense->cost}}</center></td>
<td><center>{{$expense->comments}}</center></td>

<td>

{!! Form::open(['url' => URL::to('/expense/'.$expense->id),"method"=>"DELETE"]) !!}
<button type="submit" class="btn btn-danger mb-1">Delete</button>
    {!! Form::close() !!}

    
    






</td>


<td>
<a href="{{ URL::to('/expense/'.$expense->id.'/edit') }}" class="btn btn-primary mb-1">Edit</a>

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