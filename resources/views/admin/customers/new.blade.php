@extends('layouts.content')

@section('title', 'New Customer')

@section('block-content')

<h2>Tabs</h2>
<div class="bd-example bd-example-tabs">
  <nav class="nav nav-tabs" id="nav-tab" role="tablist">

    <a class="nav-item nav-link active " style="width:50%;text-align:center" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="home" aria-expanded="true">Mom</a>
    <a class="nav-item nav-link" style="width:50%;text-align:center" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="profile" aria-expanded="false">Kid</a>

  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" aria-expanded="true">

      {{--  // Mom   --}}

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
                  <div class="form-group">
                      <label for="userName">Gender : <span class="text-danger">*</span></label>
                      </div>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline1" name="customRadioInline1" checked class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline1">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline2">Female</label>
                    </div>
              </div>


              <div class="form-group">
                  <label >Date of Birth :</label>
                  <input type="date" name="bday" max="3000-12-31"
                         min="1000-01-01" class="form-control" value="{{date('Y-m-d')}}">
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


      {{--  //End Moom  --}}
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" aria-expanded="false">

     {{--  //Kid  --}}

     <div class="card mb-12">
        <div class="card-header">
          <h3><i class="fa fa-check-square-o"></i> Create a new Kid</h3>
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

    {{--  //EndKid  --}}
    </div>


  </div>
</div>

<br>



@endsection
