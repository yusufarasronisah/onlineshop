
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Ayas Online Shop</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('bootstrap-4.0.0/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
         padding-top: 5rem;
        }
        .starter-template {
         padding: 3rem 1.5rem;
         text-align: center;
        }
    </style>
  </head>

  <body>

   <?= $this->include('navbar');?>

    <main role="main" class="container">

    <?= $this->renderSection('content'); ?>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?= base_url('bootstrap-4.0.0/assets/js/vendor/jquery-slim.min.js'); ?>"><\/script>')</script>
    <script src="<?= base_url('bootstrap-4.0.0/assets/js/vendor/popper.min.js'); ?>"></script>
    <script src="<?= base_url('bootstrap-4.0.0/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('bootstrap-4.0.0/dist/js/jQuery-v3.6.0.js'); ?>"></script>
  </body>
</html>
