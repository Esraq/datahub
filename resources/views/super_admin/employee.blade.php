@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="organization" method="POST" enctype="multipart/form-data">
                                @csrf
                                      

                                       

                                        <div class="form-group">
                                            <label><b>Name:</b></label>
                                            <input type="text"  name="name" placeholder="Enter name of employee" value="{{old('name')}}" class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Email:</b></label>
                                            <input type="email"  name="email" placeholder="Enter email of employee" value="{{old('email')}}" class="form-control" />
                                            @if ($errors->first('email'))<div class="alert alert-danger">{!! $errors->first('email') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Phone:</b></label>
                                            <input type="text"  name="phone" placeholder="Enter phone number of employee" value="{{old('phone')}}" class="form-control" />
                                            @if ($errors->first('phone'))<div class="alert alert-danger">{!! $errors->first('phone') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Address:</b></label>
                                            <input type="text"  name="address" placeholder="Enter address of employee" value="{{old('address')}}" class="form-control" />
                                            @if ($errors->first('address'))<div class="alert alert-danger">{!! $errors->first('address') !!}</div> @endif
                                            
                                        </div>

                                     <div class="form-group">
                                    <label>Role(Access of Dashboard):</label>
                                    <select class="form-control" name="title">
                                        <option value="">Choose a role type</option>
                                        <option value="super_admin">Super Admin</option>
                                        <option value="bay">BayBD</option>
                                        <option value="whef">WHEF</option>
                                        <option value="asaup">ASAUP</option>


                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Organization:</label>
                                    <select class="form-control" name="title">
                                        <option value="">Choose an Organization</option>
                                        @foreach($organizations as $organization)
                                        <option value="{{$organization->id}}">{{$organization->organization_name}}</option>
                                        @endforeach


                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Region:</label>
                                    <select class="form-control" name="title">
                                        <option value="">Choose a region</option>
                                        @foreach($regions as $region)
                                        <option value="{{$region->id}}">{{$region->region_name}}</option>
                                        @endforeach


                                    </select>
                                </div>

                                <div class="form-group">
                                            <label><b>Password:</b></label>
                                            <input type="text"  name="password" placeholder="Enter password for dashboard" value="{{old('password')}}" class="form-control" />
                                            @if ($errors->first('password'))<div class="alert alert-danger">{!! $errors->first('password') !!}</div> @endif
                                            
                                        </div>



                                        <div class="form-group">
                                            <label>Upload Photo:</label>
                                                <input type="file" name="photo" value="{{old('photo')}}" class="form-control" />
                                                @if ($errors->first('photo'))<div class="alert alert-danger">{!! $errors->first('photo') !!}</div> @endif
                                            </div>


                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>






















@endsection