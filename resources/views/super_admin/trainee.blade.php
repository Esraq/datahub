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
              <form action="trainee" method="POST" enctype="multipart/form-data">
                                @csrf
                                      

                               

                                        <div class="form-group">
                                            <label><b>Name of Trainee:</b></label>
                                            <input type="text"  name="name" placeholder="Enter name" value="{{old('name')}}" class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Email:</b></label>
                                            <input type="email"  name="email" placeholder="Enter email" value="{{old('email')}}" class="form-control" />
                                            @if ($errors->first('email'))<div class="alert alert-danger">{!! $errors->first('email') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>Phone:</b></label>
                                            <input type="text"  name="phone" placeholder="Enter phone" value="{{old('phone')}}" class="form-control" />
                                            @if ($errors->first('phone'))<div class="alert alert-danger">{!! $errors->first('phone') !!}</div> @endif
                                            
                                        </div>




                                        <div class="form-group">
                                            <label><b>Address:</b></label>
                                            <input type="text"  name="address" placeholder="Enter address" value="{{old('budget')}}" class="form-control" />
                                            @if ($errors->first('budget'))<div class="alert alert-danger">{!! $errors->first('budget') !!}</div> @endif
                                            
                                        </div>


                                     <div class="form-group">
                                    <label>Training:</label>
                                    <select class="form-control" name="training">
                                        
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