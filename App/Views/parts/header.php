<!DOCTYPE html>
<html>
<head>
    <?php if (!empty($title)): ?>
        <title><?php echo $title; ?></title>
    <?php endif; ?>

    <link rel="stylesheet" href="<?php echo ASSETS_URI; ?>css/libs/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URI; ?>css/main.css">

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/task/create">Create Task</a>
            </li>
            <?php if (empty($_SESSION["is_auth"])) { ?>
                <li class="nav-item active">
                    <a class="nav-link" href="/login">Login</a>
                </li>

            <?php } else { ?>
                <li class="nav-item active">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            <?php } ?>


        </ul>

    </div>
</nav>

<main role="main">




