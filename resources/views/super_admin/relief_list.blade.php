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




<th><center><b>Serial No</b></center></th>

<th><center><b>Name</b></center></th>

<th><center><b>Mobile</b></center></th>


<th><center><b>National ID</b></center></th>





 
</tr>

@foreach($items as $item)
<tr>

<td><center>{{$item->serial_no}}</center></td> 
<td><center>{{$item->name}}</center></td> 
<td><center>{{$item->mobile}}</center></td>
<td><center>{{$item->nid}}</center></td>







<!-- Modal content -->

</tr>
@endforeach
</table>




</center>                      
                </div>
              </div>
             </div>








@endsection