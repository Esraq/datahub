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
                                            <label><b>Name of Trainee:</b></label>
                                            <input type="text"  name="name" placeholder="Enter Name of the training" value="{{old('name')}}" class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Email:</b></label>
                                            <input type="email"  name="start_date" placeholder="Enter start date of training" value="{{old('start_date')}}" class="form-control" />
                                            @if ($errors->first('start_date'))<div class="alert alert-danger">{!! $errors->first('start_date') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>Phone:</b></label>
                                            <input type="text"  name="end_date" placeholder="Enter end date" value="{{old('end_date')}}" class="form-control" />
                                            @if ($errors->first('end_date'))<div class="alert alert-danger">{!! $errors->first('end_date') !!}</div> @endif
                                            
                                        </div>




                                        <div class="form-group">
                                            <label><b>Address:</b></label>
                                            <input type="text"  name="budget" placeholder="Enter budget" value="{{old('budget')}}" class="form-control" />
                                            @if ($errors->first('budget'))<div class="alert alert-danger">{!! $errors->first('budget') !!}</div> @endif
                                            
                                        </div>


                                     <div class="form-group">
                                    <label>Training:</label>
                                    <select class="form-control" name="organization">
                                        
                                        @foreach($training as $training)
                                        <option value="{{$training->id}}">{{$training->name}}</option>
                                        @endforeach


                                    </select>
                                </div>

                                        
                                       




                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection