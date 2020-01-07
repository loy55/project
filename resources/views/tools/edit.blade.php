@extends('layouts.app', ['title' => __('tools')])
   
@section('content')
<div class="container-fluid ">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
            <div class="pull-left">
               <br> <h1>Edit tools</h1></br>
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
  
    <form action="{{ route('tools.update',$tool->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
         <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">    
            <select name="qualification">
            <option value="">Select Qualification</option>
            <option value="Computer System Servicing">Computer System Servicing</option>
            <option value="Automotive Servicing">Automotive Servicing</option>
            <option value="Cookery">Cookery</option>
            </div>
            </div>
                    <strong>Tool Name:</strong>
                    <input type="text" name="tools name" value="{{ $tool->tools_name }}" class="form-control" placeholder="Tool Name">
                </div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>Tool Brand:</strong> <input type="text" name="tools brand" value="{{ $tool->tools_brand }}" class="form-control" placeholder="Tool Brand"
                   >
                </div>
                </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>Serial Number:</strong>
                    <input type="text" name="serial number" value="{{ $tool->serial_number }}" class="form-control" placeholder="Serial Number">
                </div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>Quantity:</strong>
                    <input type="number" name="quantity" value="{{ $tool->quantity }}" class="form-control" placeholder="Quantity">
                </div>
                
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-full-left"> <div class ="pull-right">
                <a href="{{ route('tools.index') }}" class="btn btn-primary pull-right"> Back</a>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
   
    </form>
@endsection