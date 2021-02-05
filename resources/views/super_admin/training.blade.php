@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="training" method="POST" enctype="multipart/form-data">
                                @csrf
                                      

                                <div class="form-group">
                                    <label>Organization:</label>
                                    <select class="form-control" name="organization">
   
   <option>Select Organization</option>
     
   @foreach ($organizations as $key => $value)
     <option value="{{ $value->organization_name }}" {{ ( $key == $value->id) ? 'selected' : '' }}> 
         {{ $value->organization_name }} 
     </option>
   @endforeach    
 </select>
                                </div>


                                        <div class="form-group">
                                            <label><b>Name of Training:</b></label>
                                            <input type="text"  name="name" placeholder="Enter Name of the training" value="{{old('name')}}" class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Start Date:</b></label>
                                            <input type="date"  name="start_date" placeholder="Enter start date of training" value="{{old('start_date')}}" class="form-control" />
                                            @if ($errors->first('start_date'))<div class="alert alert-danger">{!! $errors->first('start_date') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>End Date:</b></label>
                                            <input type="date"  name="end_date" placeholder="Enter end date" value="{{old('end_date')}}" class="form-control" />
                                            @if ($errors->first('end_date'))<div class="alert alert-danger">{!! $errors->first('end_date') !!}</div> @endif
                                            
                                        </div>




                                        <div class="form-group">
                                            <label><b>Budget:</b></label>
                                            <input type="text"  name="budget" placeholder="Enter budget" value="{{old('budget')}}" class="form-control" />
                                            @if ($errors->first('budget'))<div class="alert alert-danger">{!! $errors->first('budget') !!}</div> @endif
                                            
                                        </div>

                                        
                                        <div class="form-group">
                                            <label><b>Trainer:</b></label>
                                            <input type="text"  name="trainer" placeholder="Enter trainers" value="{{old('trainer')}}" class="form-control" />
                                            @if ($errors->first('trainer'))<div class="alert alert-danger">{!! $errors->first('trainer') !!}</div> @endif
                                            
                                        </div>






                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection