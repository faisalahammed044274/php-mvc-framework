<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>

<body>
    <center>
        <h1 style="color:white; background: green; border:5px solid red; padding:20px;">Portfolio</h1>
    </center>
    <div class="list">
        <?php
        echo "<h3>Portfolio list :</h3>";
        foreach ($portfolios as $portfolio) :  ?>
            <li><?php echo $portfolio['title']; ?></li>
        <?php endforeach; ?>
    </div>
</body>

</html>