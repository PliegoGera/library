
<div id="container" class="container-fluid">
<button type="button" class="btn btn-primary">
<a href="<?php echo base_url('books');?>" class="text-white">back</a>
</button>

<div class="alert alert-danger" role="alert">
  
    <?php echo validation_errors(); ?>
    </div>
    <form action="<?= base_url('userController/store') ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Name*</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Name" value="<?php echo set_value('name'); ?>">
  </div>
 
  <div class="form-group">
    <label for="exampleInputEmail1">Email*</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Email" value="<?php echo set_value('email'); ?>">
  </div>


  <button type="submit" class="btn btn-primary">Save User</button>
</form>
</div>