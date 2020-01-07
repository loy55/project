@extends('layouts.app', ['title' => __('equips')])
   
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
            <div class="pull-left">
               <br> <h1>Edit Equipments</h1></br>
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
  
    <form action="{{ route('equips.update',$equip->id) }}" method="POST">
        @csrf
        @method('PUT')
   
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
                    <strong>Equipment Name:</strong>
                    <input type="text" name="equipment name" value="{{ $equip->equipment_name }}" class="form-control" placeholder="Equipment Name">
                </div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>Equipment Brand:</strong> <input type="text" name="equipment brand" value="{{ $equip->equipment_brand }}" class="form-control" placeholder="Equipment Brand"
                   >
                </div>
                </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>Serial Number:</strong>
                    <input type="text" name="serial number" value="{{ $equip->serial_number }}" class="form-control" placeholder="Serial Number">
                </div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>Quantity:</strong>
                    <input type="number" name="quantity" value="{{ $equip->quantity }}" class="form-control" placeholder="Quantity">
                </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-fullleft">
            <a href="{{ route('equips.index') }}" class="btn btn-primary pull-right"> Back</a>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
   
    </form>
@endsection