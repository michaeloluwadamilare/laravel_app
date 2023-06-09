@extends('layout')
 
@section('content')
    <div class="row">
    @if($pu_result)
        <h4>{{ Str::upper($pu_result[0]->polling_unit_name) }} POLLING UNITS RESULT</h4>
        <table class="table table-stripped table-bordered">
            <tr>
                <th>Party</th>
                <th>Score</th>
            </tr>
            @php($total = 0)
        @foreach ($pu_result as $result)
        <tr>
            <td>{{ $result->party_abbreviation }}</td>
            <td>{{ $result->party_score }}</td>
        </tr>
        @php($total += $result->party_score)
        @endforeach
            <tr>
                <th><b>Total</b></th>
                <th><b>{{ $total }}</b></th>
            </tr>
        </table>
     @else 
     <p> No result available</p>
     @endif
     <dv class="col-md-12">
        <a href="/myproject" class="btn btn-danger">Back</a>
    </dv>
    </div>
@stop
