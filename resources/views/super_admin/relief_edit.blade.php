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
           

              {!! Form::open(['url' => URL::to('/relief/'.$item->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf

                                        <div class="form-group">
                                            <label><b>Serial No:</b></label>
                                            <input type="text"  name="serial_no" placeholder="Enter serial no" value="{{$item->serial_no}}" class="form-control" />
                                            @if ($errors->first('serial_no'))<div class="alert alert-danger">{!! $errors->first('serial_no') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Name:</b></label>
                                            <input type="text"  name="name" placeholder="Enter name" value="{{$item->name}}" class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>Mobile:</b></label>
                                            <input type="text"  name="mobile" placeholder="Enter mobile" value="{{$item->mobile}}" class="form-control" />
                                            @if ($errors->first('mobile'))<div class="alert alert-danger">{!! $errors->first('mobile') !!}</div> @endif
                                            
                                        </div>



                                        <div class="form-group">
                                            <label><b>National ID:</b></label>
                                            <input type="text"  name="nid" placeholder="Enter nid" value="{{$item->nid}}" class="form-control" />
                                            @if ($errors->first('nid'))<div class="alert alert-danger">{!! $errors->first('nid') !!}</div> @endif
                                            
                                        </div>



                                        


                                        
                        
                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection