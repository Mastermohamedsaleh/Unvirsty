
<!-- Modal -->
<div class="modal fade" id="deletestudent{{$student->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form method="post"  action="{{route('students.destroy',$student->id)}}" autocomplete="off" >
       @method('DELETE')
      @csrf

      
                        <div class="col">
                            <p class="h5 text-danger"> Do You Want Delete This College</p>
                            <input type="text" class="form-control" readonly value="{{ $student->name }}">
                        </div>
                

      

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  class="btn btn-danger">delete</button>
      </div>
</form>
    </div>
  </div>
</div>







        

              