
<div id="container" class="container-fluid">
<button type="button" class="btn btn-primary">
<a href="<?php echo base_url('users');?>" class="text-white">back</a>
</button>

<div class="alert alert-danger" role="alert">
  
    <?php echo validation_errors(); ?>
    </div>
    <form action="<?= base_url('userController/update/'.$users[0]->id.'') ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Name*</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Name" value="<?php echo $users[0]->name; ?>">
  </div>
 
  <div class="form-group">
    <label for="exampleInputEmail1">Author*</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Email" value="<?php echo $users[0]->email; ?>">
  </div>

  <button type="submit" class="btn btn-primary">Save User</button>
</form>
</div>