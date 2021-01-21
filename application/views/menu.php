<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Shorten</title>
</head>
<body>
  <br>
  <div class="container">
    <form action="<?php echo base_url().'shorten/add' ?>" method="POST">
      <label for="url_name" class="form-label">Shorten</label>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">https://example.com/</span>
        <input type="text" class="form-control" id="url_name" name="url_name" aria-describedby="basic-addon3">
      </div>
      <label for="url" class="form-label">Link</label>
      <input class="form-control" type="url" id="url" name="url" placeholder="Your Valid URL">
      <br>
      <div>
        <input type="submit" name="submit">
      </div>
    </form>
    <table class="table table-hover">
      <thead>
        <th>Id</th>
        <th>shorten</th>
        <th>URL</th>
      </thead>
      <tbody>
        <?php if (isset($data)) { ?>
          <?php foreach ($data as $row) { ?>
            <tr>
              <td><?php echo $row->id ?></td>
              <td><?php echo $row->shorten ?></td>
              <td><?php echo $row->link ?></td>
            </tr>
          <?php }
        } else { ?>
          <tr>
            <td colspan="3" align="center">No Data</td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  -->
</body>
</html>
