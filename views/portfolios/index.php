<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?php ASSET_URL . '/css/app.css' ?>" rel="stylesheet" />
    <title></title>
</head>

<body>
    <?php views('/partials/header.php') ?>
    <div class="list">
        <?php
        echo "<h3>Portfolio list :</h3>";
        foreach ($portfolios as $portfolio) :  ?>
            <li><?php echo $portfolio['title']; ?></li>
        <?php endforeach; ?>
    </div>

    <?php views('/partials/footer.php'); ?>
</body>

</html>