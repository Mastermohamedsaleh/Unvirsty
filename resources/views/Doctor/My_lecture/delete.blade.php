<!-- Modal -->
<div class="modal fade" id="deletelecture{{$lecture->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Lecture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form method="post"  action="{{route('lecture.destroy',$lecture->id)}}" autocomplete="off" >
      @method('DELETE')
      @csrf

      <div class="col">
                            <p class="h5 text-danger"> Do You Want Delete This Lecture</p>
                            <input type="text" class="form-control" readonly value="{{ $lecture->title }}">
                        </div>
                

      

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary button-mode" data-bs-dismiss="modal">Close</button>
        <button  class="btn btn-danger button-mode">delete</button>
      </div>
</form>
    </div>
  </div>
</div>







        

              

        

              