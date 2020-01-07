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
                <h2> Show Equipment</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Equipment Name:</strong>
                {{ $equip->equipment_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Equipment Brand:</strong>
                {{ $equip->equipment_brand }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Qualification:</strong>
                {{ $equip->qualification }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Serial Number:</strong>
                {{ $equip->serial_number }}
            </div>
        </div>
        <div class="pull-right">
                <a class="btn btn-primary pull-right" href="{{ route('equips.index') }}"> Back</a>
            </div>
        </div>
        
        </div>
    </div>
@endsection