
<div id="container" class="container-fluid">
<button type="button" class="btn btn-primary">
<a href="<?php echo base_url('categories');?>" class="text-white">back</a>
</button>

<div class="alert alert-danger" role="alert">
  
    <?php echo validation_errors(); ?>
    </div>
    <form action="<?= base_url('categoriesController/store') ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Name*</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Name" value="<?php echo set_value('name'); ?>">
  </div>
 
  <div class="form-group">
    <label for="exampleInputEmail1">Description*</label>
    
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" value="<?php echo set_value('description'); ?>"></textarea>
  </div>
  </div>


  <button type="submit" class="btn btn-primary">Save Category</button>
</form>
</div>