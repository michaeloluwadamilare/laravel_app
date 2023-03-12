@extends('layout')
 
@section('content')
    <div class="row">
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
