<?php require 'init.php' ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>


  <title>Hello, world!</title>
</head>

<body>

  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h1 class="m-3">Form Control</h1>
      </div>
    </div>

    <form id="neuer_eintrag" action="create.php" method="POST">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Datum</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Datum">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Inhalt</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-warning btn-lg">Neuen Eintrag anlegen</button>
      </div>
    </form>

  </div>

  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h1 class="m-3">Tabelle</h1>
      </div>
    </div>

    <table class="table table-striped text-align-center">

      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Datum</th>
          <th scope="col">Inhalt</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($res as $entry) : ?>
          <tr>
            <td><?= $entry['id']; ?></td>
            <td><?= $entry['datum']; ?></td>
            <td><?= $entry['inhalt']; ?></td>
            <td>

              <button type="submit" class="btn btn-primary m-1">Bearbeiten</button>
              <button type="submit" class="btn btn-danger">Löschen</button>
            </td>
          </tr>
        <?php endforeach; ?>


      </tbody>

    </table>

  </div>

  </div>

  <script src="script.js"></script>

</body>

</html>