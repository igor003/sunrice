<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 29.09.2017
 * Time: 21:44
 */
include('headers.php');
?>
<div class="container">
    <div class="row">
        <?php
       //var_dump($products);
        echo $products['title'];
        echo '<br>';
        echo $products['category'];
        echo '<br>';
        echo $products['quantity'];
        echo '<br>';
        echo $products['price'];
        echo '<br>';
        echo $products['note'];
        ?>
    </div>
</div>
<?php
include('footer.php');
?>