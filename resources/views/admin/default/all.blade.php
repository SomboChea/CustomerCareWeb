
@extends('layouts.content')

 @include("admin.default.callmodal") 
@section('block-content')
 {{--  Modal start here  --}}

<div class="row">
  <div class="col-md-12">
  <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr class="gridheader">            
        </tr>
    </thead>
    <tbody class="gridbody">       
    </tbody>
    <tfoot >
        <tr class="gridheader">         
        </tr>
    </tfoot>
</table>
</div>
</div>

@yield('test')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script>    
    

    $.ajax({      
        url:'<?= $url ?>',
        method:"GET",
        success:function(data){
 
             var hidden=<?= $hidden ?>;
 
 
            var Cols=Object.keys(data[0]);
            Cols.forEach(function(element){
                if(hidden.includes(element))
                     return;
                var colheader='<th scope="col">'+element+'</th>';
                 $(".gridheader").append(colheader);
            })
          
            data.forEach(function(e,index){
                var item="<tr data-index='"+index+"' style='cursor:pointer'>";
                Cols.forEach(function(col){
                 if(hidden.includes(col))
                 return;
                     item+='<td>'+e[col]+'</td>';
                })
                item+="</tr>";
                $('.gridbody').append(item);
            })
            $("#example").DataTable();
            $(".gridbody").find('tr').hover(function(){
              $(this).css('background','blue').css('color','white');
            }).mouseleave(function(){
              $(this).removeAttr('style').css('cursor','pointer');
            }).click(function(e){
               var element=data[$(this).data('index')];
              @yield('modaljs')
            })
       
        }
    });

  
 </script>

 <button hidden="hidden" id="showmodal" data-target="#infomodal" data-backdrop="static" data-toggle="modal" tyoe="button">modal</button>

   @yield('modal')
@endsection