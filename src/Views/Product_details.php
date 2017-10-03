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
        <div class="col-xs-4 col-xs-offset-4 text-center">
            <a href=<?php echo '/product/history_view/'.$id ?>>
                <div class="btn btn-success">
                    HISTORY
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
            </tbody>
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
            </table>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>