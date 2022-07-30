<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>
<style>
    h1 {
        background: green;
        color: white;
        padding: 10px;
        text-align: center;
    }

    h2 {
        background: gray;
        color: white;
        padding: 60px;
    }

    .list {
        background: yellow;
        color: green;
        padding: 18px;
        border-radius: 10px;
    }
</style>

<body>
    <div class="list">
        <?php
        echo "<h3>Portfolio list :</h3>";
        foreach ($portfolios as $portfolio) :  ?>
            <li><?php echo $portfolio['title']; ?></li>
        <?php endforeach; ?>
    </div>

    <h1>Portfolio</h1>
    <h2>Hello from view with controller.</h2>
</body>

</html>