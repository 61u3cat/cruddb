<?php

$conn = new PDO("mysql:host=localhost;dbname=ecommerceseip",
    'root', '');
//set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);

$query ="SELECT * FROM `brands`";
$stmt = $conn->prepare($query);

$result = $stmt->execute();
$brands =$stmt->fetchAll();
//echo "<pre>";
//print_r($banners);
//echo "</pre>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>List</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <h1>List</h1>
                <table class="table table-border">

                    <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($brands as $brand):
                        ?>
                        <tr>
                            <td><?=$brand['title'];?></td>
                            <td><a href="show.php?id=<?=$brand['id'];?>">Show</a> |<a href="edit.php?=<?=$brand['id'];?>">Edit</a> |<a href="delete.php?id=<?=$brand['id'];?>">Delete</a></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

