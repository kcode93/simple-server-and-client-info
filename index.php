<!DOCTYPE html>
<?php inclue('./server-info.php'); ?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="php Server and cliente info">
    <meta name="keywords" content="php, server name, client info">
    <meta name="author" content="Kenneth Garcia">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CSS LINKS-->
    <link rel="stylesheet" href="./resources/css/reset.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./resources/css/style.css">
    <title>The Lake</title>
  </head><!--end of head-->
  <body>
    <div class="container">
      <h1>Server & File Info</h1>
      <?php if($server): ?>
        <ul class="list-group">
          <?php foreach ($server as $key => $value):?>
            <li class="list-group-item">
              <strong><?php echo $key; ?></strong>
              <?php echo $value; ?>
            </li>
          <?php endforeach; ?>
        </ul><!--end of list-->
      <?php endif; ?>
    </div><!--end of container-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./resources/js/main.js"></script>
  </body>
</html>
