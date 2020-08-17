
<div id="container" class="container-fluid">
<button type="button" class="btn btn-primary">
<a href="<?php echo base_url('books');?>" class="text-white">back</a>
</button>

<div class="alert alert-danger" role="alert">
  
    <?php echo validation_errors(); ?>
    </div>
    <form action="<?= base_url('booksController/update/'.$books[0]->id.'') ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Name*</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Name" value="<?php echo $books[0]->name; ?>">
  </div>
 
  <div class="form-group">
    <label for="exampleInputEmail1">Author*</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="author" aria-describedby="emailHelp" placeholder="Author" value="<?php echo $books[0]->author; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Category*</label>
    <select class="form-control" id="exampleFormControlSelect1" name="category" value="<?php echo $books[0]->id_category; ?>">
        <?php if($categorys) :?>
            <?php foreach ($categorys as $category) :?>
        
                <option value="<?php echo  $category->id ?>"><?php echo  $category->name ?></option>
                
            <?php endforeach ?>
        <?php endif ?>
     
     
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Published date*</label>
    <input type="date" class="form-control" id="exampleInputEmail1" data-date-format="YYYY MMMM DD" aria-describedby="emailHelp" name="date" placeholder="Published date" value="<?php echo $books[0]->publish_date; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Users*</label>
    <select class="form-control" id="exampleFormControlSelect1" name="user" value="<?php echo $books[0]->id_user; ?>">
        <?php if($users) :?>
            <?php foreach ($users as $user) :?>
                <option value="<?php echo  $user->id ?>"><?php echo  $user->name ?></option>
            <?php endforeach ?>
        <?php endif ?>
     
     
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Save Book</button>
</form>
</div>