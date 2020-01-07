@extends('layouts.app', ['title' => __('tools')])
  
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <br></br>
        <div class="pull-left">
           <br> <h2><b>Add New Tool</b></h2></br>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('tools.store') }}" method="POST">
    @csrf

     <div class="row">
     <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">    
            <select name="qualification">
            <option value="">Select Qualification</option>
            <option value="Computer System Servicing">Computer System Servicing</option>
            <option value="Automotive Servicing">Automotive Servicing</option>
            <option value="Cookery">Cookery</option>
            </div>
            </div>
        
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Tool name:</strong>
                <input type="text" name="tools name" class="form-control" placeholder="Tool Name">
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Tool Brand:</strong>
                <input type="text" name="tools brand" class="form-control" placeholder="Tool Brand">
            </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Serial Number:</strong>
                <input type="text" name="serial number" class="form-control" placeholder="Serial Number">
            </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Quantity:</strong>
                <input type="number" name="quantity" class="form-control" placeholder="Quantity">
            </div>
           </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-pull-left">
        <a class="btn btn-primary" href="{{ route('tools.index') }}"> Back</a>
                <button type="submit" class="btn btn-primary">ADD</button>
        </div>
        </br>
        </div>
    </div>
   
</form>
@endsection