@extends('Rollercoaster.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Rollercoaster</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Rollercoaster.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $Rollercoaster->Maker }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $Rollercoaster->Lengte }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hoogte:</strong>
                {{ $Rollercoaster->Hoogte }}
            </div>
        </div>
    </div>
@endsection