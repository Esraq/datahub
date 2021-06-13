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
              <table id='empTable' width='100%' border="1" style='border-collapse: collapse;'>
      <thead>
        <tr>
          <td>Sector</td>
          <td>Month</td>
          <td>Year</td>
          <td>Cost</td>
        </tr>
      </thead>
    </table>
           
            </center>                      
                </div>
              </div>
             </div>






















@endsection



<script type="text/javascript">
    $(document).ready(function(){

      // DataTable
      $('#empTable').DataTable({
         processing: true,
         serverSide: true,
         ajax: "{{route('getData')}}",
         columns: [
            { data: 'sector' },
            { data: 'month' },
            { data: 'year' },
            { data: 'cost' },
         ]
      });

    });
    </script>