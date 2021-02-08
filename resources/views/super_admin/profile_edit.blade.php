@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
            
              {!! Form::open(['url' => URL::to('/profile/'.$user->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf
                                      

                                       

                                        <div class="form-group">
                                            <label><b>Name:</b></label>
                                            <input type="text"  name="name" placeholder="Enter name of employee" value="{{$user->name}}" class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
                                        </div>

                                      
                                        <div class="form-group">
                                            <label><b>Phone:</b></label>
                                            <input type="text"  name="phone" placeholder="Enter phone number of employee" value="{{$user->phone}}" class="form-control" />
                                            @if ($errors->first('phone'))<div class="alert alert-danger">{!! $errors->first('phone') !!}</div> @endif
                                            
                                        </div>

                                     

                                        <div class="form-group">
                                            <label><b>Address:</b></label>
                                            <input type="text"  name="address" placeholder="Enter address of employee" value="{{$user->address}}" class="form-control" />
                                            @if ($errors->first('address'))<div class="alert alert-danger">{!! $errors->first('address') !!}</div> @endif
                                            
                                        </div>


                                     
                                    

                              

                              



                                        <div class="form-group">
                                            <label>Upload Photo:</label>
                                                <input type="file" name="image" value="{{old('image')}}" class="form-control" />
                                                @if ($errors->first('image'))<div class="alert alert-danger">{!! $errors->first('image') !!}</div> @endif
                                            </div>

                                            <input type="hidden" name="hidden_image" value="{{ $user->filename}}" />
                                           

                                        <div class="form-group">
                                            <label>Previous Image:</label>
                                            <img src="{{url('public/images/$user->filename')}}" alt="" height="90px" width="120">
                                            </div>


                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                
                </div>
              </div>
             </div>






















@endsection