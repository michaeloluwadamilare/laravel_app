@extends('layout')
 
@section('content')
    <div class="row">
        <h4>LGA RESULT CHECKER</h4>
        <form action="/lga_result" method="POST">
        {{ csrf_field() }}
        <div class="col-md-4">
            <select class="form-control" name="lga">
            <option value="">--Select LGA--</option>
            @foreach ($lgas as $lga) 
            <option value="{{ $lga->lga_id }}"> {{ $lga->lga_name }}</option>
            @endforeach
            </select><br>
            
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Check</button>
        </div>
</form>
    </div>
@stop
