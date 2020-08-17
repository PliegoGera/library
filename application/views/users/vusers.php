

<div id="container" class="container-fluid">
    

    <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-primary"><a href="<?php echo base_url('users/adduser'); ?>" class="text-white">Add User</a></button>
      <button type="button" class="btn btn-primary"><a href="<?php echo base_url('books'); ?>" class="text-white">Books</a></button>
      <button type="button" class="btn btn-primary"><a href="<?php echo base_url('categories'); ?>" class="text-white">Categorys</a></button>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          
          <th scope="col">actions</th>
          
          
    
          
        </tr>
      </thead>
      <tbody>
          <?php if($users) :?>
            <?php foreach ($users as $user) :?>
            <tr>
                <th scope="row"><?php echo $user->id?></th>
                <td><?php echo $user->name?></td>
                <td><?php echo $user->email?></td>
             
                <td><button type="button" class="btn btn-primary" ><a href="<?php echo base_url('users/edituser/'.$user->id.''); ?>" class="text-white">Edit</a></button>
                
                </tr>
            <?php endforeach ?>
          <?php endif ?>
        
       
      </tbody>
    </table>
    
    </div>
    
