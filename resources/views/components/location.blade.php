@section('location')
<div class="form-group">

    <label for="input-group">Location</label>
<div class="input-group mb-3">
<div class="form-control">
    <select class="province-select">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>   
</div>

<div class="form-control">
    <select class="district-select">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>   
</div>

<div class="form-control">
    <select class="commune-select">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>   
      
</div>
</div>
</div>

<script>
$(document).ready(function(){
    alert("Hello");
})
</script>
@endsection