@section('location')

<div class="form-group">
<label for="form-row">Location : </label>
<div class="form-row">
    <div class="form-group col-md-3">
      <select id="province" name="province" class="form-control">
          <option selected="">Phnom Penh</option>
          <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <select id="district" name="district" class="form-control">
        <option selected="">Sen Sok</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <select id="commune" name="commune" class="form-control">
        <option selected="">This is Com</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <input type="text" name="address" class="form-control" id="address">
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
 
  $.ajax({
    url:"province",
    success:function(data){
      data.forEach(function(element){
        var item="<option>"+element.name+"</option>";
        $("#province").append(item).on('change',function(e){
          
        });
      })
      
    }
  })

})
</script>
@endsection