@extends('layouts.content')
@include('components/location')
@section('title', 'New Source')
@section('block-content')
<div class="card mb-3">
    <div class="card-header">
        <h3><i class="fa fa-check-square-o"></i> Fill all required </h3>
    </div>
        
    <div class="card-body">
      
    <form autocomplete="off" action="{{route('api')}}">
          <div class="form-row">
            <div class="form-group col-md-12">
                <label for="type">From Source</label>
                <select id="type" name="type" class="form-control">
                  <option selected value="1">Hospital / Clinic</option>
                  <option value="2">Retail Shop</option>
                  <option value="3">Personal Consultant</option>
                  <option value="4">Other</option>
                </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Name..." autocomplete="off">
            </div>
            <div class="form-group col-md-6">
              <label for="owner">Owner</label>
              <input type="text" class="form-control" name="owner" id="owner" placeholder="Owner..." autocomplete="off">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="tel_1">Tel Line 1</label>
              <input type="text" class="form-control" name="tel_1" id="tel_1" placeholder="076 999 5149">
            </div>
            <div class="form-group col-md-3">
              <label for="tel2">Tel Line 2</label>
              <input type="text" class="form-control" name="tel_2" id="tel2" placeholder="012 999 999">
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="example@domain.org">
            </div>
          </div>
          @yield("location")
          {{--  <div class="form-row">
            <div class="form-group col-md-3">
              <label for="province">Province / City</label>
              <select id="province" name="province" class="form-control">
                  <option selected="">Phnom Penh</option>
                  <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="district">District</label>
              <select id="district" name="district" class="form-control">
                <option selected="">Sen Sok</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="commune">Commune</label>
              <select id="commune" name="commune" class="form-control">
                <option selected="">This is Com</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="address">Address</label>
              <input type="text" name="address" class="form-control" id="address">
            </div>
          </div>  --}}
          <div class="row">
            <div class="form-group col-md-12">
              <label for="memo">Memo</label>
              <textarea class="form-control" name="memo" id="memo" rows="3"></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </form>
        
    </div>							
  </div>

@endsection()

@push('select2')
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#submit').click(function() {
        swal("Great Job!","Saved","success");
      });
    });
    $(".js-example-tags").select2({
        tags: true
      });
  </script>
@endpush  