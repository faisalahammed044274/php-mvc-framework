<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo env('APP_TITLE'); ?></title>
    <!-- Load Styles -->
    <link rel="stylesheet" href="<?php echo assets('css/app.css'); ?>">
</head>

<body>
    <!-- Load Header Nav -->
    <?php views('/partials/nav.php'); ?>
    <!-- Content Start -->
    <div class="main-container">
        <!-- Content will be loaded here. -->