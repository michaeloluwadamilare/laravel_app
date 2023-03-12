@extends('layout')
 
@section('content')

<form action="/poll_store" method="POST">
    <div class="row">
        <h4>LGA RESULT CHECKER</h4>
        {{ csrf_field() }}
        <div class="col-md-3">
            <label>Polling Unit</label>
            <input type="text" name="polling_unit" class="form-control">
        </div>
        <div class="col-md-3">
            <label>Polling Unit Description</label>
            <input type="text" name="polling_desc" class="form-control">
        </div>
        <div class="col-md-3">
        <label>Ward</label>
            <select id="my-select" class="form-control" name="ward">
            <option value="">--Select Ward--</option>
            @foreach ($wards as $ward) 
            <option value="{{ $ward->uniqueid }}"> {{ $ward->ward_name }}</option>
            @endforeach
            </select><br>
            
        </div>
        <div class="col-md-3">
        <label>LGA</label>
            <select id="my-select" class="form-control" name="lga">
            <option value="">--Select LGA--</option>
            @foreach ($lgas as $lga) 
            <option value="{{ $lga->lga_id }}"> {{ $lga->lga_name }}</option>
            @endforeach
            </select><br>
            
        </div>
        

    </div>
    
    
        @foreach ($parties as $party) 

        <div class="row">
        <div class="col-md-4">
            <input type="hidden" name="party[]" value="{{ $party->id }}">
            <input type="hidden" name="party_abb[]" value="{{ $party->partyname }}">
            <p><strong> {{ $party->partyname }} </strong></p>
        </div>
        <div class="col-md-4">
            <input type="number" placeholder="Enter party score" name="partyscore[]" class="form-control">
        </div>
        </div><br>
            @endforeach
   
    
    <div class="row">
    <div class="col-md-12">
            <center> <button type="submit" class="btn btn-primary">Submit</button></center>
        </div>
        </div>

    </form>
@stop
