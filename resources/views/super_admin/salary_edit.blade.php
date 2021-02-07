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
           

              {!! Form::open(['url' => URL::to('/salary/'.$salary->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf

                                        <div class="form-group">
                                            <label><b>Name:</b></label>
                                            <input type="text"  name="name" placeholder="Enter name" value="{{$salary->name}}" class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Designation:</b></label>
                                            <input type="text"  name="designation" placeholder="Enter designation" value="{{$salary->designation}}" class="form-control" />
                                            @if ($errors->first('designation'))<div class="alert alert-danger">{!! $errors->first('designation') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>Month:</b></label>
                                            <input type="text"  name="month" placeholder="Enter month" value="{{$salary->month}}" class="form-control" />
                                            @if ($errors->first('month'))<div class="alert alert-danger">{!! $errors->first('month') !!}</div> @endif
                                            
                                        </div>



                                        <div class="form-group">
                                            <label><b>Year:</b></label>
                                            <input type="text"  name="year" placeholder="Enter year" value="{{$salary->year}}" class="form-control" />
                                            @if ($errors->first('year'))<div class="alert alert-danger">{!! $errors->first('year') !!}</div> @endif
                                            
                                        </div>



                                        <div class="form-group">
                                            <label><b>Salary:</b></label>
                                            <input type="text"  name="salary" placeholder="Enter salary" value="{{$salary->salary}}" class="form-control" />
                                            @if ($errors->first('salary'))<div class="alert alert-danger">{!! $errors->first('salary') !!}</div> @endif
                                            
                                        </div>


                                        
                        
                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection