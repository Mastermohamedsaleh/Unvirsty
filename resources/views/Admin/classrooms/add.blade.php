








<!-- Modal -->
<div class="modal fade" id="classroom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         




      <input type="text" name="name" class="form-controll">


      <div class="mm"></div>
       
        <a href="javascript:void(0)" class="btn btn-danger addrow">+</a>
        
       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script>
$(document).ready(function(){
  $(".addrow").click(function(){
     var row = '<input type="text" name="name" class="form-controll">'

     $('.mm').append(row);
  });
});
</script>