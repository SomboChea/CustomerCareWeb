@extends('layouts.content')
@section('title', 'View All Sources')

@section('block-content')
<div class="row">
        <div class="col-md-12">
        <table id="Userrow" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr class="gridheader">            
              </tr>
          </thead>
          <tbody class="gridbody">    
             <tr  id="nodata">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>No Data</td>
           
                 <td></td>
                 <td></td>
             </tr>   
          </tbody>
       
       </table>
       </div>
       </div>
       
       @yield('test')
       <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
       <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
       
       <script>    
           var hidden=[ "created_at","image",, "memo", "type_id","logger_id","status","location_id","type"];
           $.ajax({
             url:"{{route('api.db.column',['table'=>'viewrefers'])}}",
             success:function(data){
         
                 data.forEach(function(element){
                     if(hidden.includes(element))
                          return;
             
                     var colheader='<th scope="col">'+element+'</th>';
                      $(".gridheader").append(colheader);
                 })
          
             }
         });
        $.ajax({      
            url:'{{route("api.source")}}/{{$type}}',
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
                 $('.gridbody').append(item);
             })
          
             $(".gridbody").find('tr').hover(function(){
               $(this).css('background','blue').css('color','white');
             }).mouseleave(function(){
               $(this).removeAttr('style').css('cursor','pointer');
             }).click(function(e){
                var element=data[$(this).data('index')];
              
                @yield('modaljs')
                
             })
                $("#Userrow").DataTable();
            }
        });
    </script>     
@endsection()
