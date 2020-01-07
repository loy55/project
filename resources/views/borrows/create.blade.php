@extends('layouts.app', ['title' => __('equips')])
  
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
            <h2><b>Borrowing Form</b></h2>
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
   
<form action="{{ route('borrows.store') }}" method="POST">
    @csrf

     <div class="row">
     <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">    
            <select name="qualification">
            <option value="">Select Qaulification</option>
            <option value="Computer System Servicing">Computer System Servicing</option>
            <option value="Automotive Servicing">Automotive Servicing</option>
            <option value="Cookery">Cookery</option>
            
            </div>
        <br>
        <label for="example-text-input" class="form-control-label">Equipment name</label>
                <input type="text" name="equipment name" class="form-control" placeholder="Equipment Name">
        
                <strong>Equipment Brand:</strong>
                <input type="text" name="equipment brand" class="form-control" placeholder="Equipment Brand">
           
           
                <strong>Serial Number:</strong>
                <input type="text" name="serial number" class="form-control" placeholder="Serial Number">
          
           
                <strong>Quantity:</strong>
                <input type="number" name="quantity" class="form-control" placeholder="Quantity">
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-fullleft">
        <a class="btn btn-primary" href="{{ route('equips.index') }}"> Back</a>
                <button type="submit" class="btn btn-primary">ADD</button>
        
    </div>
   </div>
</form>
@endsection