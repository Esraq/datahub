@extends('layouts.super_admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->

              @if (session()->has('success'))

<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
         Document Added Successfully
        </div>
@endif




              <form action="project_docs" method="POST" enctype="multipart/form-data">
                                @csrf
                                      

                                       

                                       


                                        <div class="form-group">
                                    <label>Project:</label>
                                    <select class="form-control" name="program_id">
                                        
                                        @foreach($project as $project)
                                        <option value="{{$project->id}}">{{$project->project_name}}</option>
                                        @endforeach


                                    </select>
                                </div>


                                <div class="form-group">
                                            <label><b>Title:</b></label>
                                            <input type="text"  name="name" placeholder="Enter name" value="{{old('name')}}" class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            
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