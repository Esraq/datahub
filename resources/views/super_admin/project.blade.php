@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          @if (session()->has('success'))

<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
         Action Completed Successfully
        </div>
@endif

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="project" method="POST" enctype="multipart/form-data">
                                @csrf
                                                                  

                                        <div class="form-group">
                                            <label><b>Project Name:</b></label>
                                            <input type="text"  name="project_name" placeholder="Enter project name" value="{{old('project_name')}}" class="form-control" />
                                            @if ($errors->first('project_name'))<div class="alert alert-danger">{!! $errors->first('project_name') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Starting Date:</b></label>
                                            <input type="date"  name="starting_date" placeholder="Enter starting date" value="{{old('starting_date')}}" class="form-control" />
                                            @if ($errors->first('starting_date'))<div class="alert alert-danger">{!! $errors->first('starting_date') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>End Date:</b></label>
                                            <input type="date"  name="end_date" placeholder="Enter end date" value="{{old('end_date')}}" class="form-control" />
                                            @if ($errors->first('end_date'))<div class="alert alert-danger">{!! $errors->first('end_date') !!}</div> @endif
                                            
                                        </div>




                                        <div class="form-group">
                                            <label><b>Current Status:</b></label>
                                            <input type="text"  name="current_status" placeholder="Enter current status" value="{{old('current_status')}}" class="form-control" />
                                            @if ($errors->first('current_status'))<div class="alert alert-danger">{!! $errors->first('current_status') !!}</div> @endif
                                            
                                        </div>


                                   
                                        <div class="form-group">
                                            <label><b>Budget:</b></label>
                                            <input type="text"  name="budget" placeholder="Enter budget" value="{{old('budget')}}" class="form-control" />
                                            @if ($errors->first('budget'))<div class="alert alert-danger">{!! $errors->first('budget') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                         <label>Organization:</label>
                                         <select class="form-control" name="organization">
                                        
                                         @foreach($organizations as $organization)
                                         <option value="{{$organization->organization_name}}">{{$organization->organization_name}}</option>
                                         @endforeach

                                        </select>
                                        </div>
                               
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>


@endsection