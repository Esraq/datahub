@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <form action="{{ route('time_module.update',$times->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                        <div class="form-group">
                                            <label><b>Month:</b></label>
                                            <select class="form-control" name="month">
                                                    <option>Select Month</option>
                                                    <option value="January" {{ ( $times->month == "January") ? 'selected' : '' }}>January</option>
                                                    <option value="February" {{ ( $times->month == "February") ? 'selected' : '' }} >February</option>
                                                    <option value="March" {{ ( $times->month == "March") ? 'selected' : '' }}>March</option>
                                                    <option value="April" {{ ( $times->month == "April") ? 'selected' : '' }}>April</option>
                                                    <option value="May" {{ ( $times->month == "May") ? 'selected' : '' }}>May</option>
                                                    <option value="June" {{ ( $times->month == "June") ? 'selected' : '' }}>June</option>
                                                    <option value="July" {{ ( $times->month == "July") ? 'selected' : '' }}>July</option>
                                                    <option value="August" {{ ( $times->month == "August") ? 'selected' : '' }}>August</option> 
                                                    <option value="September" {{ ( $times->month == "September") ? 'selected' : '' }}>September</option>
                                                    <option value="October" {{ ( $times->month == "October") ? 'selected' : '' }}>October</option>
                                                    <option value="November" {{ ( $times->month == "November") ? 'selected' : '' }}>November</option>
                                                    <option value="December" {{ ( $times->month == "December") ? 'selected' : '' }}>December</option>  
                                            </select>
                                            @if ($errors->first('month'))<div class="alert alert-danger">{!! $errors->first('month') !!}</div> @endif
                                            
                                        </div>

                                        <div class="form-group">
                                            <label><b>Year:</b></label>
                                            <select class="form-control" name="year" class="form-control">
                                                <option>Select Year</option>
                                                @for ($i = 1990; $i <= 2040; $i++)
                                                    <option value="{{$i}}" {{ ( $times->year == $i) ? 'selected' : '' }}>{{$i}}</option>  
                                                    
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