<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 28.09.2017
 * Time: 20:42
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="/bootstrap/bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap/bootstrap-3.3.2-dist/js/bootstrap.min.js" rel="stylesheet">
    <link href="/bootstrap/css/style.css" rel="stylesheet">
    <link href='/css/style.css' rel='stylesheet'>
</head>
<body>
<div class="container">
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class='text-center'>Product</th>
                <th class='text-center' colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if($result) {
                foreach ($result as $title) {
                    ?>
                    <tr>
                        <td class='text-center' scope="row"><a href=""><?php echo $title['title'] ?></a></td>
                        <td class='text-center'>
                            <div class="btn btn-success">Update</div>
                        </td>
                        <td class='text-center'>
                            <div class="btn btn-danger">Delete</div>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>