@extends('layout')
 
@section('content')
    <div class="row">
        <dv class="col-md-12">
            <a href="lga"style="float:right;" class="btn btn-danger">CHECK LGA RESULT</a>&nbsp;
            <a href="pollsave" class="btn btn-primary" style="float:right;margin-right:8px">NEW POLLING UNIT RESULT</a>
        </dv>
        <h4>POLLING UNITS</h4>
        <ul>
        @foreach ($polling_units as $polling_unit)
        @if ($polling_unit->polling_unit_name)
        <li><a href="{{ url('polling_units_result/'. $polling_unit->uniqueid) }}"> {{ $polling_unit->polling_unit_name }} </a></li>
        @endif
        @endforeach
        </ul>
    </div>
@stop
