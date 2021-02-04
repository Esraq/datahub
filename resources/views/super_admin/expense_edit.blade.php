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
              {!! Form::open(['url' => URL::to('/expense/'.$expense->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf


                               

                                        <div class="form-group">
                                            <label><b>Sector:</b></label>
                                            <input type="text"  name="sector" placeholder="Enter sector" value="{{$expense->sector}}" class="form-control" />
                                            @if ($errors->first('sector'))<div class="alert alert-danger">{!! $errors->first('sector') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Month:</b></label>
                                            <input type="text"  name="month" placeholder="Enter month example:January" value="{{$expense->month}}" class="form-control" />
                                            @if ($errors->first('month'))<div class="alert alert-danger">{!! $errors->first('month') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>Year:</b></label>
                                            <input type="text"  name="year" placeholder="Enter year" value="{{$expense->year}}" class="form-control" />
                                            @if ($errors->first('year'))<div class="alert alert-danger">{!! $errors->first('year') !!}</div> @endif
                                            
                                        </div>




                                        <div class="form-group">
                                            <label><b>Amount:</b></label>
                                            <input type="text"  name="amount" placeholder="Enter amount" value="{{$expense->cost}}" class="form-control" />
                                            @if ($errors->first('amount'))<div class="alert alert-danger">{!! $errors->first('amount') !!}</div> @endif
                                            
                                        </div>


                                   
                                        <div class="form-group">
                                            <label><b>Comments:</b></label>
                                            <input type="text"  name="comments" placeholder="Enter comments" value="{{$expense->comments}}" class="form-control" />
                                            @if ($errors->first('comments'))<div class="alert alert-danger">{!! $errors->first('comments') !!}</div> @endif
                                            
                                        </div>


                                        
                                       




                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection