<?php
include './db.php';
?>

<html>

<body>

    <main>
        <div class="container">
            <div class="row">

                <?php foreach ($products as $key => $value) { ?>
                <div class="card mt-5 col-md-3 col-sm-12">
                    <img class="card-img img-fluid" src="<?php echo $value->image ?>">
                    <?php echo "<div class='brand'><h4>$value->brand </h4></div>";
                    echo "<h4>$value->modelname</h4><br>";
                    echo "<div class='features'><strong>Caratteristiche principali:</strong></div>";
                    echo $value->type ?? null;
                    echo $value->material ?? null;
                    echo "<br>";
                    echo $value->lifePhase ?? null;
                    echo $value->color ?? null;
                    echo $value->shape ?? null;
                    echo "<br>";
                    echo $value->mainIngredient ?? null;
                    echo "<div class='price'>" . $value->price . " euro</div><br>";
                    echo "<div class='label'>Categoria: " . get_class($value) . "</div>" ?>
                    <img class="cat-icon" src="<?php echo $value->category->icon ?>">
                </div>
                <?php
                }
                ?>
            </div>
        </div>

    </main>

</html>
</body>