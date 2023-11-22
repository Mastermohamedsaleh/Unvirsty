
<!-- Modal -->
<div class="modal fade" id="editadmin{{$admin->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form method="post"  action="{{route('admins.update',$admin->id)}}" autocomplete="off" enctype="multipart/form-data">
      @csrf
      <div class="row">
      <div class="col">
      <div class="form-group">
        <label>Name: </label>
        <input type="text"  value="{{$admin->name}}" name="name" class="form-control" >
        </div>
      </div>

      <input type="text" name="oldpassword" value="{{$admin->password}}" >
  
      <div class="col">
      <div class="form-group">
         <label>Email : </label>
         <input type="email" value="{{$admin->email}}"  name="email" class="form-control" >
         </div>
      </div>



      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  class="btn btn-primary">udpate</button>
</form>
      </div>
    </div>
  </div>
</div>







        

              