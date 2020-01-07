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
            
            <div class="pull-center">
               <h2> Show tools</h2>
           
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tool Name:</strong>
                {{ $tool->tools_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tool Brand:</strong>
                {{ $tool->tools_brand }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Qualification:</strong>
                {{ $tool->qualification }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Serial Number:</strong>
                {{ $tool->serial_number }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity:</strong>
                {{ $tool->quantity }}
            </div>
        
            <div class="pull-right">
                <a class="btn btn-primary pull-right" href="{{ route('tools.index') }}"> Back</a>
            </div>
            
    </div>
    </div>
@endsection