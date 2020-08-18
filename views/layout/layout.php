<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Title -->
    <title><?php echo Config::getParams('app_name'); ?></title>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <!-- Brand/logo -->
    <a class="navbar-brand" href="<?php echo Config::getParams('url'); ?>"><?php echo Config::getParams('app_name'); ?></a>

    <!-- Links -->
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo Config::getParams('url'); ?>index.php?page=home&action=index">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo Config::getParams('url'); ?>index.php?page=registration&action=index">Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo Config::getParams('url'); ?>index.php?page=login&action=index">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Management</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">My Account</a>
        </li>
    </ul>
</nav>

<div class="container">
<?php echo $content; ?>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
