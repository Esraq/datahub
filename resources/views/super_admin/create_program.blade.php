@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="programme" method="POST" enctype="multipart/form-data">
                                @csrf
                                      

                                       

                                        <div class="form-group">
                                            <label><b>Name:</b></label>
                                            <input type="text"  name="name" placeholder="Enter Programme Name" value="{{old('name')}}" class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Short Description(within 20 words):</b></label>
                                            <input type="text"  name="short_description" placeholder="Enter short description" value="{{old('short_description')}}" class="form-control" />
                                            @if ($errors->first('short_description'))<div class="alert alert-danger">{!! $errors->first('short_description') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Year:</b></label>
                                            <input type="text"  name="year" placeholder="Enter Year" value="{{old('year')}}" class="form-control" />
                                            @if ($errors->first('year'))<div class="alert alert-danger">{!! $errors->first('year') !!}</div> @endif
                                            
                                        </div>




                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection