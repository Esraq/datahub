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

              <a class="btn btn-xs btn-warning" id="btn-export" onclick="exportHTML();">Export to word</a>
              <br><br>

              <center>
              <table id="source-html" class="table table-striped">
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
    function exportHTML(){
       var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
            "xmlns:w='urn:schemas-microsoft-com:office:word' "+
            "xmlns='http://www.w3.org/TR/REC-html40'>"+
            "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
       var footer = "</body></html>";
       var sourceHTML = header+document.getElementById("source-html").innerHTML+footer;
       
       var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
       var fileDownload = document.createElement("a");
       document.body.appendChild(fileDownload);
       fileDownload.href = source;
       fileDownload.download = 'document.doc';
       fileDownload.click();
       document.body.removeChild(fileDownload);
    }
</script>

                </div>
              </div>
             </div>






















@endsection