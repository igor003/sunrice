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

    </div>
    <div class="row">
        <div class="col-xs-2 col-xs-offset-4 text-center">
            <a href=<?php echo '/product/history_view/'.$id ?>>
                <div class=" history btn btn-success">
                    HISTORY
                </div>
            </a>
        </div>
        <div class="col-xs-2 ">
            <a href="/product/index">
                <div class=" home btn btn-info">
                    Home
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>
                    Title
                </td>
                <td>
                    <?php echo $products['title'] ?>
                </td>
            </tr>
            <tr>
                <td>Category</td>
                <td><?php echo $products['category']?></td>
            </tr>

            <tr>
                <td>
                    Quantity
                </td>
                <td>
                    <?php echo $products['quantity'] ?>
                </td>
            </tr>
            <tr>
                <td>Price</td>
                <td><?php echo $products['price'] ?></td>
            </tr>
            <tr>
                <td>Note</td>
                <td><?php echo $products['note'] ?></td>
            </tr>
            </tbody>
            </table>
        </div>
    </div>
    <div class=" similar_products row">
        <div class="col-xs-1">
            
        </div>
        <?php
            foreach($similar_products as $product){
        ?>
            <div class="similar col-xs-2 text-center">
                <a class="block" href=<?php echo'/product/details/'.$product['id'] ?>>
                    <div class="title">
                         <?php echo $product['title']?>
                    </div>
                    <div class="price">
                        <h4><?php echo $product['price'].'$'?></h4>
                    </div>
                </a>
            </div>
        <?php
            }
        ?>
    </div>
</div>
<?php
include('footer.php');
?>