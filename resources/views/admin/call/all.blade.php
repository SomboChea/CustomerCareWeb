
@extends('layouts.content');

@section('title','Alert');
@section('block-content')

<div class="row">
    <div class="col-sm-12 col-md-12">
            <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Filter</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                      <option selected>Choose...</option>
                      <option value="all">All</option>
                      <option value="day">Day</option>
                      <option value="month">Month</option>
                    </select>
                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    <button class="btn btn-outline-secondary" type="button">Search</button>
                  </div>
                  
        </div>
    </div>
    <div class="col-sm-12 col-md-12">
            <p class="text-center">View Alert</p>
        </div>
</div>

@endsection