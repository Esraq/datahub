@extends('layouts.super_admin')

@section('content')


<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
           Upload only CSV filesby converting from excel to csv 
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                @if ($errors->first('file'))<div class="alert alert-danger">{!! $errors->first('file') !!}</div> @endif
                <br>
                <button class="btn btn-success">Import User Data</button>
                <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
            </form>
        </div>
    </div>
</div>





@endsection