@section('modaljs')
    $('#infotitle').text(element.name)
    $('#showmodal').click()
@endsection

@section('modal')
<div class="modal fade" id="infomodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="infotitle"></script></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Call</button>
            </div>
          </div>
        </div>
      </div>
    {{--  modal end here  --}}
@endsection