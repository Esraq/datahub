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
              <form action="expense" method="POST" enctype="multipart/form-data">
                                @csrf
                                      

                               

                                        <div class="form-group">
                                            <label><b>Sector:</b></label>
                                            <input type="text"  name="sector" placeholder="Enter sector" value="{{old('sector')}}" class="form-control" />
                                            @if ($errors->first('sector'))<div class="alert alert-danger">{!! $errors->first('sector') !!}</div> @endif
                                            
                                        </div>
                                        <div class="form-group">
                                    <label>Month:</label>
                                    <select class="form-control" name="month">
                             
  

     
   @foreach ($times as $time)
     <option value="{{ $time->month }}"> 
         {{ $time->month }} 
     </option>
   @endforeach    
 </select>
                         
                         
 @if ($errors->first('month'))<div class="alert alert-danger">{!! $errors->first('month') !!}</div> @endif                         
                                </div>


                                <div class="form-group">
                                    <label>Year:</label>
                                    <select class="form-control" name="year">
                             
   

     
   @foreach ($times as $time)
     <option value="{{ $time->year }}"> 
         {{ $time->year }} 
     </option>
   @endforeach    
 </select>
                         
                         
 @if ($errors->first('month'))<div class="alert alert-danger">{!! $errors->first('month') !!}</div> @endif                         
                                </div>



                                        <div class="form-group">
                                            <label><b>Amount:</b></label>
                                            <input type="text"  name="amount" placeholder="Enter amount" value="{{old('amount')}}" class="form-control" />
                                            @if ($errors->first('amount'))<div class="alert alert-danger">{!! $errors->first('amount') !!}</div> @endif
                                            
                                        </div>


                                   
                                        <div class="form-group">
                                            <label><b>Comments:</b></label>
                                            <input type="text"  name="comments" placeholder="Enter comments" value="{{old('comments')}}" class="form-control" />
                                            @if ($errors->first('comments'))<div class="alert alert-danger">{!! $errors->first('comments') !!}</div> @endif
                                            
                                        </div>


                                        
                                       




                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection