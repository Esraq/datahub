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

              <a class="btn btn-xs btn-info" id="downloadLink" onclick="exportF(this)">Export to excel</a>
              <br><br>

              <center>
              <table id="table" class="table table-striped">
<thead>
<tr>




<th><center><b>Name</b></center></th>

<th><center><b>Email</b></center></th>

<th><center><b>Phone</b></center></th>


<th><center><b>Address</b></center></th>




</tr>

@foreach($trainee as $doc)
<tr>




<td><center>{{$doc->name}}</center></td>
<td><center>{{$doc->email}}</center></td>
<td><center>{{$doc->phone}}</center></td>
<td><center>{{$doc->address}}</center></td>







<!-- Modal content -->

</tr>
@endforeach
</table>
            </center>

   <script>

    
function exportF(elem) {
  var table = document.getElementById("table");
  var html = table.outerHTML;
  var url = 'data:application/vnd.ms-excel,' + escape(html); // Set your html table into url 
  elem.setAttribute("href", url);
  elem.setAttribute("download", "export.xls"); // Choose the file name
  return false;
}






   </script>


                </div>
              </div>
             </div>






















@endsection