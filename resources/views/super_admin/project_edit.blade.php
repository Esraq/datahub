@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
                                      
                                      
              {!! Form::open(['url' => URL::to('/project/'.$project->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf
                                      

                                        <div class="form-group">
                                            <label><b>Project Name:</b></label>
                                            <input type="text"  name="project_name" placeholder="Enter Project Name" value="{{$project->project_name}}" class="form-control" />
                                            @if ($errors->first('project_name'))<div class="alert alert-danger">{!! $errors->first('project_name') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Starting Date:</b></label>
                                            <input type="date"  name="starting_date" placeholder="Enter start date of project" value="{{$project->starting_date}}" class="form-control" />
                                            @if ($errors->first('starting_date'))<div class="alert alert-danger">{!! $errors->first('starting_date') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>End Date:</b></label>
                                            <input type="date"  name="end_date" placeholder="Enter end date" value="{{$project->end_date}}" class="form-control" />
                                            @if ($errors->first('end_date'))<div class="alert alert-danger">{!! $errors->first('end_date') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Current Status:</b></label>
                                            <input type="text"  name="current_status" placeholder="Enter current_status" value="{{$project->current_status}}" class="form-control" />
                                            @if ($errors->first('current_status'))<div class="alert alert-danger">{!! $errors->first('current_status') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>Budget:</b></label>
                                            <input type="text"  name="budget" placeholder="Enter budget" value="{{$project->budget}}" class="form-control" />
                                            @if ($errors->first('budget'))<div class="alert alert-danger">{!! $errors->first('budget') !!}</div> @endif
                                            
                                        </div>
                                        <div class="form-group">
                                    <label>Organization:</label>
                                    <select class="form-control" name="organization_id">
                             
   <option>{{$project->organization_id}}</option>

     
   @foreach ($organizations as $key => $value)
     <option value="{{ $value->organization_name }}" {{ ( $key == $value->id) ? 'selected' : '' }}> 
         {{ $value->organization_name }} 
     </option>
   @endforeach    
 </select>
                                </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>


@endsection