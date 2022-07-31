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