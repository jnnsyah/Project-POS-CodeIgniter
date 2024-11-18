<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Top Navbar</title>
    <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?=base_url()?>/assets/js/ie-emulation-modes-warning.js"></script>
    <script src="<?=base_url()?>/assets/js/ie10-viewport-bug-workaround.js"></script>
</head>
<body>

<!-- Static navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">JNSY POS</a>
    </div>
  </div>
</div>

<div class="container">
    <?php echo $contents; ?>
</div> <!-- /container -->

<!-- Bootstrap core JavaScript -->
<script src="<?=base_url()?>/assets/js/jquery-1.11.1.min.js"></script>
<script src="<?=base_url()?>/assets/js/bootstrap.min.js"></script>

</body>
</html>
