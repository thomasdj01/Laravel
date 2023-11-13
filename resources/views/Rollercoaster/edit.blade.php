@extends('Rollercoaster.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Rollercoaster</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Rollercoaster.index') }}"> Back</a>
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
  
    <form action="{{ route('Rollercoaster.update',$Rollercoaster->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Maker:</strong>
                <input type="text" name="Maker" value="{{ $Rollercoaster->Maker }}" class="form-control" placeholder="Maker">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lengte:</strong>
                <input type="text" name="Lengte" value="{{ $Rollercoaster->Lengte }}" class="form-control" placeholder="Lengte">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hoogte:</strong>
                <input type="text" name="Hoogte" value="{{ $Rollercoaster->Hoogte }}" class="form-control" placeholder="Hoogte">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>   
        </div>
    </form>
@endsection