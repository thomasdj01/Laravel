@extends('Rollercoaster.layout')
 
@section('content')
<div>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 10 CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('Rollercoaster.create') }}"> Create New Rollercoaster</a>
            </div>
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
            <th>Maker</th>
            <th>hoogte</th>
            <th>Lengte</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($Rollercoaster as $Rollercoaster)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $Rollercoaster->Maker }}</td>
            <td>{{ $Rollercoaster->Hoogte }}</td>
            <td>{{ $Rollercoaster->Lengte }}</td>
            <td>
                <form action="{{ route('Rollercoaster.destroy',$Rollercoaster->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('Rollercoaster.show',$Rollercoaster->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('Rollercoaster.edit',$Rollercoaster->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    
      
</div>
@endsection