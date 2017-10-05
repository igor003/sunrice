<?php
include('headers.php');
?>
<div class="container">
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <a href="/product/index"><div class=" home btn btn-info"> Home </div></a>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class='text-center'>Date</th>
                <th class='text-center'>Title</th>
                <th class='text-center'>Quantity</th>
                <th class='text-center'>Price</th>
                <th class='text-center'>Note</th>
                <th class='text-center'>Price</th>
                <th class='text-center'>Category</th>

            </tr>
            </thead>
            <tbody>
            <?php
            foreach($product_history as $record){
                ?>
                <tr>
                    <td>
                        <? echo $record['date']?>
                    </td>
                    <td>
                        <? echo $record['title']?>
                    </td>
                    <td>
                        <? echo $record['quantity']?>
                    </td>
                    <td>
                        <? echo $record['price']?>
                    </td>
                    <td>
                        <? echo $record['note']?>
                    </td>
                    <td>
                        <? echo $record['price']?>
                    </td>
                    <td>
                        <? echo $record['category']?>
                    </td>
                </tr>
            <?php
            }
            ?>

            </tbody>
        </table>
    </div>
</div>
<?php
include('footer.php');
?>
