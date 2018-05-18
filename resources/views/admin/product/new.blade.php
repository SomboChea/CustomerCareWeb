@extends('layouts.content')

@section('title', 'New Product')

@section('block-content')
<style>
  .parsley-errors-list{
    color:red;
    list-style:none;  
  }
</style>
  <div class="card mb-12">
    <div class="card-header">
      <h3><i class="fa fa-check-square-o"></i> Create a new product</h3>
    </div>
    <div class="card-body">
      <form id="myform" method="POST" action="{{route('api.product.add')}}" data-parsley-validate novalidate>
        @method('POST')
        <div class="form-group">
          <label for="userName">Full Name :<span class="text-danger">*</span></label>
          <input type="text" name="name" data-parsley-trigger="change" required placeholder="Enter name" class="form-control" id="fullname">
        </div>
        <div class="form-group">
          <label for="userName">Info<span class="text-danger">*</span></label>
          <textarea type="text" name="Info" data-parsley-uname="" rows=4 required placeholder="Info" class="form-control" id="userName"></textarea>
          <div class="errorBlock"></div>
        </div>

        
        <div class="form-group">
          <label for="passWord2">Level <span class="text-danger">*</span></label>
          <input  name="level" type="text" required placeholder="Level" class="form-control" id="passWord2">

        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="owner" checked name="owner" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Owner
          </label>
        </div>

        

        <div class="form-group text-right m-b-0">
          <button class="btn btn-primary" type="submit">
                  Submit
              </button>
          <button type="reset" class="btn-res btn btn-secondary m-l-5">
                  Cancel
              </button>
        </div>

      </form>

    </div>
  </div>

  <script src="{{asset('js/parsley.js')}}"></script>
  <script>
    $("#myform").parsley();
  </script>
@endsection
