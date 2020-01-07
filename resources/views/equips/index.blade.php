@extends('layouts.app', ['title' => __('equips')])
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Equipment</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('equips.create') }}"> Create New Equipments</a>
            </div>
            </br>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Equipment Name</th>
            <th>Equipment Brand</th>
            <th>Qaulification</th>
            <th>Serial Number</th>
            <th>Quantity</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($equips as $equip)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $equip->equipment_name }}</td>
            <td>{{ $equip->equipment_brand }}</td>
            <td>{{ $equip->qualification }}</td>
            <td>{{ $equip->serial_number }}</td>
            <td>{{ $equip->quantity }}</td>
            <td>
                <form action="{{ route('equips.destroy',$equip->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('equips.show',$equip->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('equips.edit',$equip->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $equips->links() !!}
      
@endsection