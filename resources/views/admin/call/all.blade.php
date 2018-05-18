
@extends('layouts.content')

@section('block-content')
{{--  Modal start here  --}}
<h2>Tabs</h2>
<div class="bd-example bd-example-tabs">
  <nav class="nav nav-tabs" id="nav-tab" role="tablist">
    <a  style="width:33%;text-align:center" class="nav-item nav-link active" id="nav-preg-tab" data-toggle="tab" href="#nav-preg" role="tab" aria-controls="home" aria-expanded="true">Pregnent</a>
    <a  style="width:33%;text-align:center" class="nav-item nav-link" id="nav-step-tab" data-toggle="tab" href="#nav-step" role="tab" aria-controls="home" aria-expanded="true">Step</a>
    <a  style="width:33%;text-align:center" class="nav-item nav-link" id="nav-new-tab" data-toggle="tab" href="#nav-new" role="tab" aria-controls="profile" aria-expanded="false">New</a>
   
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade active show" id="nav-preg" role="tabpanel" aria-labelledby="nav-preg-tab" aria-expanded="true">
     
<div class="row">
        <div class="col-md-12">
        <table id="CallPreg" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr class="gridheader-preg">            
              </tr>
          </thead>
          <tbody class="gridbody-preg">    
         
          </tbody>
       
       </table>
       </div>
       </div>
       
       @yield('test')
       <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
       <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
       
       <script>    
           var hidden=["Mom_namge"];
           $.ajax({
            async:false,
             url:"{{route('api.db.column',['table'=>'viewLastcall'])}}",
             success:function(data){
         
                 data.forEach(function(element){
                     if(hidden.includes(element))
                          return;
             
                     var colheader='<th scope="col">'+element+'</th>';
                      $(".gridheader-preg").append(colheader);
                 })
          
             }
         });
        $.ajax({      
            async:false,
           url:"{{route('api.call.pregnent')}}",
            method:"GET",
            success:function(data){
       
             console.log('start');
             data.forEach(function(e,index){
               var Cols=Object.keys(data[0]);
                $("#nodata").remove();
                 var item="<tr data-index='"+index+"' style='cursor:pointer'>";
                 Cols.forEach(function(col){
                  
                  if(hidden.includes(col))
                     return;
                  item+='<td>'+e[col]+'</td>';
       
                 })
           
                 item+="</tr>";
                 $('.gridbody-preg').append(item);
             })
          
             $(".gridbody-preg").find('tr').hover(function(){
               $(this).css('background','blue').css('color','white');
             }).mouseleave(function(){
               $(this).removeAttr('style').css('cursor','pointer');
             }).click(function(e){
                var element=data[$(this).data('index')];
              
                
             })
                $("#CallPreg").DataTable();
            }
        });
       
        
       </script>
       </div>
    <div class="tab-pane fade" id="nav-step" role="tabpanel" aria-labelledby="nav-step-tab" aria-expanded="false">
            <div class="row">
                    <div class="col-md-12">
                    <table id="CallStep" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr class="gridheader-step">            
                          </tr>
                      </thead>
                      <tbody class="gridbody-step">    
                       
                      </tbody>
                   
                   </table>
                   </div>
                   </div>
                   
                   @yield('test')
                   <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
                   <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
                   
                   <script>    
                        hidden=["Mom_namge"];
                       $.ajax({
                        async:false,
                         url:"{{route('api.db.column',['table'=>'viewLastcall'])}}",
                         success:function(data){
                     
                             data.forEach(function(element){
                                 if(hidden.includes(element))
                                      return;
                         
                                 var colheader='<th scope="col">'+element+'</th>';
                                  $(".gridheader-step").append(colheader);
                             })
                      
                         }
                     });
                    $.ajax({      
                        async:false,
                       url:"{{route('api.call.step')}}",
                        method:"GET",
                        success:function(data){
                          
                        
                         console.log('start');
                         data.forEach(function(e,index){
                           var Cols=Object.keys(data[0]);
                            $("#nodata").remove();
                             var item="<tr data-index='"+index+"' style='cursor:pointer'>";
                             Cols.forEach(function(col){
                              
                              if(hidden.includes(col))
                                 return;
                              item+='<td>'+e[col]+'</td>';
                   
                             })
                       
                             item+="</tr>";
                             $('.gridbody-step').append(item);
                         })
                      
                         $(".gridbody-step").find('tr').hover(function(){
                           $(this).css('background','blue').css('color','white');
                         }).mouseleave(function(){
                           $(this).removeAttr('style').css('cursor','pointer');
                         }).click(function(e){
                            var element=data[$(this).data('index')];
                          
                            
                         })
                            $("#CallStep").DataTable();
                        }
                    });
                   
                    
                   </script>
                   </div>
    <div class="tab-pane fade" id="nav-new" role="tabpanel" aria-labelledby="nav-new-tab" aria-expanded="false">
            
<div class="row">
        <div class="col-md-12">
        <table id="CallNew" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr class="gridheader-new">            
              </tr>
          </thead>
          <tbody class="gridbody-new">    
            
          </tbody>
       
       </table>
       </div>
       </div>
       
       @yield('test')
       <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
       <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
       
       <script>    
            hidden=["Mom_namge"];
           $.ajax({
               async:false,
             url:"{{route('api.db.column',['table'=>'viewLastcall'])}}",
             success:function(data){
         
                 data.forEach(function(element){
                     if(hidden.includes(element))
                          return;
             
                     var colheader='<th scope="col">'+element+'</th>';
                      $(".gridheader-new").append(colheader);
                 })
          
             }
         });
        $.ajax({      
            async:false,
           url:"{{route('api.call.new')}}",
            method:"GET",
            success:function(data){
       
             console.log('start');
             data.forEach(function(e,index){
                     
             var Cols=Object.keys(data[0]);
                $("#nodata").remove();
                 var item="<tr data-index='"+index+"' style='cursor:pointer'>";
                 Cols.forEach(function(col){
                  
                  if(hidden.includes(col))
                     return;
                  item+='<td>'+e[col]+'</td>';
       
                 })
           
                 item+="</tr>";
                 $('.gridbody-new').append(item);
             })
          
             $(".gridbody-new").find('tr').hover(function(){
               $(this).css('background','blue').css('color','white');
             }).mouseleave(function(){
               $(this).removeAttr('style').css('cursor','pointer');
             }).click(function(e){
                var element=data[$(this).data('index')];
              
                
             })
                $("#CallNew").DataTable();
            }
        });
       
        
       </script>
         </div>
  </div>
</div>


@endsection