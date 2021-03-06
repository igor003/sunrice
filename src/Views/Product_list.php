<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 28.09.2017
 * Time: 20:42
 */
include('headers.php');
?>
<div class="container">
    <div class="row">
        <div class=" add col-xs-4 col-xs-offset-4 text-center">
            <a href='/product/add_view'<div class="btn btn-success "> Add Product</div></a>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class='text-center'>Product</th>
                <th class="text-center">Price</th>
                <th class="text-center">Quantity</th>
                <th class='text-center'>Percentage of total cost</th>
                <th class='text-center' colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if($result) {
                foreach ($result as $product) {
                    ?>
                    <tr>
                        <td class='text-center' scope="row"><a href="/product/details/<?php echo $product['id']?>"><?php echo $product['title'] ?></a></td>
                        <td class='text-center'>
                            <?php echo $product['price'] ?>
                        </td>
                        <td class='text-center'>
                            <?php echo $product['quantity'] ?>
                        </td>
                        <td class='text-center'>
                            <?php echo $product['percents'].'%'?>
                        </td>
                        <td class='text-center'>
                            <a href=<?php echo '/product/update_view/'.$product['id']   ?>><div class="btn btn-success">Update</div></a>
                        </td>
                        <td class='text-center'>
                            <a href=<?php echo"/product/delete/".$product['id'] ?>><div class="btn btn-danger">Delete</div></a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            <tr>
                <td class='text-center'>Total price</td>
                <td class='text-center'><?php echo $total_sum ?></td>

            </tr>
            </tbody>
        </table>
    </div>
</div>
<?php
include('footer.php');
?>

