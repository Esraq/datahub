@extends('layouts.super_admin')

@section('content')


<div class="col-lg-12">
@if (session()->has('success'))

<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
         Profile Updated Successfully
        </div>
@endif
              <div class="card mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                 <center>


                 <img src="img/faker.png"> 



                 </center>
                </div>
              </div>
            </div>


@endsection