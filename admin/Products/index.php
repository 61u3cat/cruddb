<?php

include_once($_SERVER['DOCUMENT_ROOT']."/cruddb/config.php");

use Bitm\Product;

$_product = new Product();

$products = $_product->index();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>List</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="text-center fs-4 text-success">
                    <?php
                    echo $_SESSION['message'];
                    $_SESSION['message']="";
                    ?>
                </div>
                <h1 class="text-center">List</h1>
                <ul class="nav justify-content-center fs-4">
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Add Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="trash_index.php">All Trashed items</a>
                    </li>

                </ul>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(count($products)>0):
                    foreach ($products as $product):

                        ?>
                        <tr>
                            <td><?= $product['title'];?></td>
                            <td><?= $product['is_active']? 'Active' : 'Deactiveted';?></td>
                            <td>
                                <a href="show.php?id=<?=$product['id'];?>">Show</a> |
                                <a href="edit.php?id=<?=$product['id'];?>">Edit</a>  |
                                <a href="delete.php?id=<?=$product['id'];?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a> | <a href="trash.php?id=<?=$product['id'];?>" onclick="return confirm('Are you sure you want to delete?')">Trash</a>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    else:
                    ?>
                    <tr>
                        <td colspan="2">No product is available.<a href="create.php">Click here to add one.</a> </td>
                    </tr>
                    <?php
                    endif;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>

