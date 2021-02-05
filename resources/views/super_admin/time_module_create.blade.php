@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="{{ route('time_module.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                        <div class="form-group">
                                            <label><b>Month:</b></label>
                                            <select class="form-control" name="month" value="{{old('month')}}">
                                                    <option>Select Month</option>
                                                    <option value="January" >January</option>
                                                    <option value="February" >February</option>
                                                    <option value="March" >March</option>
                                                    <option value="April" >April</option>
                                                    <option value="May" >May</option>
                                                    <option value="June" >June</option>
                                                    <option value="July" >July</option>
                                                    <option value="August" >August</option> 
                                                    <option value="September" >September</option>
                                                    <option value="October" >October</option>
                                                    <option value="November" >November</option>
                                                    <option value="December" >December</option>  
                                            </select>
                                            @if ($errors->first('month'))<div class="alert alert-danger">{!! $errors->first('month') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Year:</b></label>
                                            <select class="form-control" name="year" value="{{old('year')}}" class="form-control">
                                                <option>Select Year</option>
                                                @for ($i = 1990; $i <= 2040; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>  
                                                    
                                                @endfor  
                                            </select>
                                            @if ($errors->first('year'))<div class="alert alert-danger">{!! $errors->first('year') !!}</div> @endif
                                            
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  
                </div>
              </div>
             </div>

@endsection