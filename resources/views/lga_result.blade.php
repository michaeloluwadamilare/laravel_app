@extends('layout')
 
@section('content')
@if($lga_result)
    <div class="row">
        <h4>{{ Str::upper($lga_result[0]->lga_name) }} LGA  RESULT</h4>
        <table class="table table-stripped table-bordered">
            
        @php($total = 0)
        @foreach ($lga_result as $result)
        
        @php($total += $result->party_score)
        @endforeach
            <tr>
                <th><b>Total Result</b></th>
                <th><b>{{ $total }}</b></th>
            </tr>
        </table>
    </div>
@else<p>No data available. </p>
@endif
<div>
            <a href="lga" style="float:right;" class="btn btn-danger">Back</a>
        </div>
@stop
