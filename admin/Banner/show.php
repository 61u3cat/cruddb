<?php
include_once($_SERVER['DOCUMENT_ROOT']."/cruddb/config.php");


use Bitm\Banner;
$_show= new Banner();

$banner = $_show->show();

/*echo "<pre>";
print_r($product);
echo "</pre>";*/

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Show</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="text-center mb-4">Show</h1>

                <dl class="row">
                    <dt class="col-md-6">ID:</dt>
                    <dd class="col-md-6"><?= $banner['id'];?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-6">Title:</dt>
                    <dd class="col-md-6"><?= $banner['title'];?></dd>
                </dl>

                <dl class="row">
                    <dt class="col-md-6">Link:</dt>
                    <dd class="col-md-6"><?= $banner['link'];?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-6">Promotional Message:</dt>
                    <dd class="col-md-6"><?= $banner['promotional_message'];?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-6">HTML_Banner:</dt>
                    <dd class="col-md-6"><?= $banner['html_banner'];?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-3">Is Active</dt>
                    <dd class="col-md-9">
                        <?php
                        echo $banner['is_active'] ? 'Activated' : 'Deactivated';
                        ?>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-3">Is Draft</dt>
                    <dd class="col-md-9">
                        <?php
                        echo $banner['is_draft'] ? 'Drafted' : 'Not Drafted';
                        ?>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-2">Created AT:</dt>
                    <dd class="col-md-10"><?= $banner['created_at'];?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-2">Modified AT:</dt>
                    <dd class="col-md-10"><?= $banner['modified_at'];?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-2">Picture:</dt>
                    <dd class="col-md-10">
                        <img height="250px" src="<?=$webroot;?>uploads/<?=$banner['picture'];?>">
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
