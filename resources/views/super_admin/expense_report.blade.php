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




<th><center><b>Sector</b></center></th>

<th><center><b>Cost</b></center></th>






</tr>

@foreach($times as $time)
<tr>




<td><center>{{$time->sector}}</center></td>
<td><center>{{$time->cost}}</center></td>








<!-- Modal content -->

</tr>
<tr>


</tr>
@endforeach
<tr>
<td colspan="2">Sum={{$count}}</td>
</tr>
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