@extends('layouts.content')

@section('title', 'New Product')

@section('block-content')

  <div class="card mb-12">
    <div class="card-header">
      <h3><i class="fa fa-check-square-o"></i> Create a new product</h3>
    </div>
    <div class="card-body">
      <form id="myform" method="POST" action="{{asset('api/v1/user/news')}}" data-parsley-validate novalidate>
        @method('POST')
        <div class="form-group">
          <label for="userName">Full Name :<span class="text-danger">*</span></label>
          <input type="text" name="fullname" data-parsley-trigger="change" required placeholder="Enter Full name" class="form-control" id="fullname">
        </div>
        <div class="form-group">
          <label for="userName">User Name<span class="text-danger">*</span></label>
          <input type="text" name="username" data-parsley-uname="" required placeholder="Enter user name" class="form-control" id="userName">
          <div class="errorBlock"></div>
        </div>

        <div class="form-group">
          <label for="pass1">Password<span class="text-danger">*</span></label>
          <input id="pass1" name="password" type="password" placeholder="Password" required class="form-control">
        </div>
        <div class="form-group">
          <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
          <input data-parsley-equalto="#pass1" type="password" required placeholder="Password" class="form-control" id="passWord2">

        </div>


        <div class="form-group ">
          <label for="passWord2">Role<span class="text-danger">*</span></label>

          <select name="role_id" class="form-control Role-select" require data-parsley-select="">
                  <option selected="selected" value="0">    --Choose Role--</option>
                  <option  value="1">User</option>
                  <option value="2">Admin</option>
                </select>
          <div class="errorBlock"></div>
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
@endsection
