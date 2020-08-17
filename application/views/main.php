

<div id="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
      <?php if($users) :?>
        <?php foreach ($books as $book) :?>
        <tr>
            <th scope="row"><?= $book['id']?></th>
            <td><?= $book['name']?></td>
            <td><?= $book['author']?></td>
            <td><?= $book['id_category']?></td>
            <td><?= $book['publish_date']?></td>
            <td><?= $book['available']?></td>
            <td><button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
        <?php endforeach ?>
      <?php endif ?>
    
   
  </tbody>
</table>

</div>
