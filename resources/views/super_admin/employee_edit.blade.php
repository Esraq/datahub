@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              @foreach($users as $user)
              {!! Form::open(['url' => URL::to('/employee/'.$user->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf
                                      

                                       

                                        <div class="form-group">
                                            <label><b>Name:</b></label>
                                            <input type="text"  name="name" placeholder="Enter name of employee" value="{{$user->name}}" class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Email:</b></label>
                                            <input type="email"  name="email" placeholder="Enter email of employee" value="{{$user->email}}" class="form-control" />
                                            @if ($errors->first('email'))<div class="alert alert-danger">{!! $errors->first('email') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Phone:</b></label>
                                            <input type="text"  name="phone" placeholder="Enter phone number of employee" value="{{$user->phone}}" class="form-control" />
                                            @if ($errors->first('phone'))<div class="alert alert-danger">{!! $errors->first('phone') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Designation:</b></label>
                                            <input type="text"  name="designation" placeholder="Enter designation of employee" value="{{$user->designation}}" class="form-control" />
                                            @if ($errors->first('designation'))<div class="alert alert-danger">{!! $errors->first('designation') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Address:</b></label>
                                            <input type="text"  name="address" placeholder="Enter address of employee" value="{{$user->address}}" class="form-control" />
                                            @if ($errors->first('address'))<div class="alert alert-danger">{!! $errors->first('address') !!}</div> @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><b>
                                            
                                            For updating organization<br>
                                            
                                            @foreach($organizations as $organization)
                                            
                                             {{$organization->organization_name}} id is {{$organization->id}},
                                            
                                            @endforeach
                                            </b></label>
                                            <input type="text"  name="organization" placeholder="Enter address of employee" value="{{$user->organization_id}}" class="form-control" />
                                            @if ($errors->first('address'))<div class="alert alert-danger">{!! $errors->first('address') !!}</div> @endif
                                            
                                        </div>

                                    

                              

                                <div class="form-group">
                                    <label>
                                    <b>
                                    For updating Region <br>
                                    @foreach($regions as $region)
                                            
                                             {{$region->region_name}} id is {{$region->id}},
                                            
                                            @endforeach
                                    
                                    </b>
                                    </label>

                                    <input type="text"  name="region" placeholder="Enter address of employee" value="{{$user->region_id}}" class="form-control" />
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
                                  @endforeach
                </div>
              </div>
             </div>






















@endsection