
@extends('layouts.content')

@section('title','Alert')
@section('block-content')



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

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script>    
    $.ajax({      
        url:"{{asset('api/v1')}}/db/{{$dbtable}}/page/1",
        method:"GET",
        success:function(data){
 
             var hidden=['table','mom_id'];
 
 
            var Cols=Object.keys(data[0]);
            Cols.forEach(function(element){
                if(hidden.includes(element))
                     return;
                var colheader='<th scope="col">'+element+'</th>';
                 $(".gridheader").append(colheader);
            })
          
            data.forEach(function(e){
                var item="<tr>";
                Cols.forEach(function(col){
                 if(hidden.includes(col))
                 return;
                     item+='<td>'+e[col]+'</td>';
                })
                item+="</tr>";
                $('.gridbody').append(item);
            })
            $("#example").DataTable();
            
        }
    })
 </script>

 <button data-target="#modalsimple" data-backdrop="static" data-toggle="modal" tyoe="button">modal</button>
 <div class="modal fade" id="modalsimple" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <script>

  </script>
@endsection