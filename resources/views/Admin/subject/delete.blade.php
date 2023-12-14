<!-- Modal -->
<div class="modal fade" id="deletesubject{{$subject->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel"> Deleted Subjuct </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form method="post"  action="{{route('subject.destroy','test')}}" autocomplete="off" >
      @csrf
    @method('DELETE')






    <input type="hidden" name="id" value="{{$subject->id}}">
    <h5 style="font-family: 'Cairo', sans-serif;">Are you Sure from delete Subjuct</h5>

      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>







        

              
