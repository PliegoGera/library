

<div id="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Author</th>
      <th scope="col">Category</th>
      <th scope="col">Publish date</th>
      <th scope="col">Available</th>
      <th scope="col">usuario</th>
      <th scope="col">actions</th>
      
      

      
    </tr>
  </thead>
  <tbody>
      <?php if($books) :?>
        <?php foreach ($books as $book) :?>
        <tr>
            <th scope="row"><?php echo $book->id?></th>
            <td><?php echo $book->name?></td>
            <td><?php echo $book->author?></td>
            <td><?php echo $book->id_category?></td>
            <td><?php echo $book->publish_date?></td>
            <td><?php echo $book->available?></td>
            <td><?php echo $book->id_user?></td>
            <td><button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
        <?php endforeach ?>
      <?php endif ?>
    
   
  </tbody>
</table>

</div>
