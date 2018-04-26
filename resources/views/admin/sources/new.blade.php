@extends('layouts.content')
@section('title', 'New Source')
@section('block-content')
<div class="card mb-3">
    <div class="card-header">
        <h3><i class="fa fa-check-square-o"></i> Fill all required </h3>
    </div>
        
    <div class="card-body">
        
        <form autocomplete="off" action="#">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Name" autocomplete="off">
            </div>
            <div class="form-group col-md-6">
              <label for="ownername">Owner Name</label>
              <select class="js-example-basic-single" name="ownername" id="ownername">
                  <option value="AL">Alabama</option>
                    
                  <option value="WY">Wyoming</option>
                </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="tel1">Tel Line 1</label>
              <input type="text" class="form-control" id="tel1" placeholder="076 999 5149">
            </div>
            <div class="form-group col-md-6">
              <label for="tel2">Tel Line 2</label>
              <input type="text" class="form-control" id="tel2" placeholder="012 999 999">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">State</label>
              <select id="inputState" class="form-control">
                <option selected="">Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Check me out
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        
    </div>							
</div>

@endsection()