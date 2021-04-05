<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bellers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="img/phone-app.png">
    <link rel="apple-touch-icon" href="img/phone-app.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'cdr.php'; ?>
</head>
<body>
<div class="container">
<h1>Bellers</h1>


<?php printCdrTable('table'); ?>

<!-- end div.container -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
