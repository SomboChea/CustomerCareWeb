@extends('layouts.content')

@include('components\location')

@section('title', 'New User')
@section('block-content')
<style>
  .parsley-errors-list {
    color: red;
    list-style: none;
  }
</style>
<div class="card mb-12">
  <div class="card-header">
    <h3><i class="fa fa-check-square-o"></i> Create a new user</h3>
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

<script src="{{asset('js/parsley.js')}}"></script>


<script>
  var parsleyConfig = {
    errorsContainer: function(pEle) {
      var $err = pEle.$element.siblings('.errorBlock');
      return $err;
    }
  }

  $('#myform').parsley(parsleyConfig);
  // TODO

  window.Parsley.addValidator('select', {
    validateString: function(value) {
      return value != 0;
    },
    messages: {
      en: 'Value Must be Role'
    }
  });
  window.Parsley.addValidator('uname', {

    validateString: function(data) {
      var check = false;
      var dat = $.ajax({
        url: "{{asset('api/v1/db/checkusername')}}/" + data,
        async: false,
        success: function(data) {
          console.log("ajax");
          check = $(data).length == 0;
        }
      });
      console.log(check);
      return check;
    },
    messages: {
      en: "Username Already Be taken"
    }

  });
  $(".Role-select").select2({
    tags: false
  });
</script>
@endsection()
