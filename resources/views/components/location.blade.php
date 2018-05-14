@section('location')

<div class="form-group">
<label for="form-row">Location : </label>
<div class="form-row">
    <div class="form-group col-md-3">
      <select id="province" name="province" class="form-control" required >
          <option selected="">Phnom Penh</option>
          <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <select id="district" name="district" class="form-control" required >
        <option selected="">Sen Sok</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <select id="commune" name="commune" class="form-control" required >
        <option selected="">This is Com</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <input type="text" name="address" class="form-control" id="address" required >
    </div>
  </div>
</div>

 {{--  Script  --}}

<script>
$(document).ready(function(){
 
  $.ajax({
    url:"{{route('api.province')}}",
    success:function(data){
      $("#province").html('');
     
      data.forEach(function(element){  
        var item="<option value='"+element.pro_id+"'>"+element.Province+"</option>";
        $("#province").append(item);
      })
      $("#province").trigger('change');
    }
  })

})
$("#province").on("change",function(){
  $.ajax({
    
    url:"{{route('api.location')}}/district/"+$("#province").val(),       
    success:function(data){
      $("#district").html('');
      data.forEach(function(element){  
        var item="<option value='"+element.dist_id+"'>"+element.District+"</option>";
        $("#district").append(item);
      })
      $("#district").trigger('change');
    }
  })
 });
 $("#district").on('change',function(){
  $.ajax({
  url:"{{route('api.location')}}/commune/"+$("#district").val(), 
  success:function(data){
    $("#commune").html('');
    data.forEach(function(element){  
      var item="<option value='"+element.com_id+"'>"+element.Commune+"</option>";
      $("#commune").append(item);
    })
  }
  })
})
$("#province").select2({
 tags:true
}).on('select2:select',function(){
  $("#district").html('');
  $("#commune").html('');
});
$("#district").select2({
  tags:true
 }).on('select2:select',function(){
  $("#commune").html('');
});
$("#commune").select2({
  tags:true
 });
</script>
@endsection