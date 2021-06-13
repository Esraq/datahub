@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="relief" method="POST" enctype="multipart/form-data">
                                @csrf
                                      

                                       

                                        <div class="form-group">
                                            <label><b>Serial No:</b></label>
                                            <input type="text"  name="serial_no" placeholder="Enter serial number" value="{{old('serial_no')}}" class="form-control" />
                                            @if ($errors->first('serial_no'))<div class="alert alert-danger">{!! $errors->first('serial_no') !!}</div> @endif
                                            
                                        </div>

                                        
                                        <div class="form-group">
                                            <label><b>Name:</b></label>
                                            <input type="text"  name="name" placeholder="Enter name" value="{{old('name')}}" class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
                                        </div>


                                        
                                        <div class="form-group">
                                            <label><b>Mobile Number:</b></label>
                                            <input type="text"  name="mobile" placeholder="Enter mobile number" value="{{old('mobile')}}" class="form-control" />
                                            @if ($errors->first('mobile'))<div class="alert alert-danger">{!! $errors->first('mobile') !!}</div> @endif
                                            
                                        </div>


                                        
                                        <div class="form-group">
                                            <label><b>NID Number:</b></label>
                                            <input type="nid"  name="nid" placeholder="Enter national id number" value="{{old('nid')}}" class="form-control" />
                                            @if ($errors->first('nid'))<div class="alert alert-danger">{!! $errors->first('nid') !!}</div> @endif
                                            
                                        </div>







                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection