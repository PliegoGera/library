

<div id="container" class="container-fluid">
    

    <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-primary"><a href="<?php echo base_url('categories/addcategory'); ?>" class="text-white">Add category</a></button>
      <button type="button" class="btn btn-primary"><a href="<?php echo base_url('books'); ?>" class="text-white">Books</a></button>
      <button type="button" class="btn btn-primary"><a href="<?php echo base_url('users'); ?>" class="text-white">Users</a></button>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">description</th>
          
          <th scope="col">actions</th>
          
          
    
          
        </tr>
      </thead>
      <tbody>
          <?php if($categories) :?>
            <?php foreach ($categories as $category) :?>
            <tr>
                <th scope="row"><?php echo $category->id?></th>
                <td><?php echo $category->name?></td>
                <td><?php echo $category->description?></td>
             
                <td><button type="button" class="btn btn-primary" ><a href="<?php echo base_url('categories/editcategory/'.$category->id.''); ?>" class="text-white">Edit</a></button>
                
                </tr>
            <?php endforeach ?>
          <?php endif ?>
        
       
      </tbody>
    </table>
    
    </div>
    
