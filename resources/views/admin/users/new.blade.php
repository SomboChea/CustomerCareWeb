@extends('layouts.content')
@section('title', 'New User');
@section('block-content')
<style>
  .parsley-errors-list{
    color:red;
    list-style:none;  
  }
</style>
<div class="card mb-12">
    <div class="card-header">
        <h3><i class="fa fa-check-square-o"></i> Create a new user</h3>
    </div>
        
    <div class="card-body">
        
    						
      <form id="myform" action="{{route('admin.users.view')}}" data-parsley-validate novalidate>
        <div class="form-group">
                    <label for="userName">Full Name :<span class="text-danger">*</span></label>
                    <input type="text" name="nick" data-parsley-trigger="change" required placeholder="Enter Full name" class="form-control" id="userName">
                </div>
        <div class="form-group">
            <label for="userName">User Name<span class="text-danger">*</span></label>
            <input type="text" name="nick" data-parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="userName">
        </div>
        <div class="form-group">
            <label for="emailAddress">Email address<span class="text-danger">*</span></label>
            <input type="email" name="email" data-parsley-trigger="change" required placeholder="Enter email" class="form-control" id="emailAddress">
        </div>
        <div class="form-group">
            <label for="pass1">Password<span class="text-danger">*</span></label>
            <input id="pass1" type="password" placeholder="Password" required class="form-control">
        </div>
        <div class="form-group">
            <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
            <input data-parsley-equalto="#pass1" type="password" required placeholder="Password" class="form-control" id="passWord2">
            
        </div>


        <div class="form-group ">
                <label for="passWord2">Role<span class="text-danger">*</span></label>
           
            <select class="form-control Role-select" require data-parsley-select="">
                <option selected="selected" value="0">    --Choose Role--</option>
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
    $.ajax({
        url:"{{asset(env('APP_API_PATH').env('APP_API_VER'))}}/db/tbl_role",
        success:function(data){
            console.log(data);
            $.each(data,function(ind,element){
                $(".Role-select").append("<option value='"+element['id']+"'>"+element['role']+"</option>");
             })
            }
    })
 
    
        </script>
        <script>
          window.Parsley.addValidator('select', {
            validateString: function(value) {      
              return value !=0;
            },
            messages: {
              en: 'Value Must be Role',
            }
          });
          $(".Role-select").select2({
            tags: false
      });
</script>
@endsection()