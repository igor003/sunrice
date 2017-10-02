<?php
include('headers.php');
?>
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
        <form action ='/product/add' method ='POST'>
            <div class="form-group">
                <label for="title">Product title</label>
                <input value='<?php echo $details['title']?>' name="title" type="text" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="price">Product price</label>
                <input value='<?php echo $details['price']?>' name="price" type="text" class="form-control" id="price">
            </div>
            <div class="form-group">
                <label for="quantity">Product quantity</label>
                <input value='<?php echo $details['quantity']?>' name="quantity" type="text" class="form-control" id="quantity">
            </div>
            <div class="form-group">
                <label for="product_type">Select type of product</label>
                <select name="id_category"  class="form-control" id="product_type">
                    <?php
                    foreach($categories as $category) {
                        echo"<option value=". $category['id']." ". ($details['id_category'] == $category['id'] ? "selected='selected'" : "" ).">". $category['category']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <textarea value='' name="note" class="form-control" id="note" rows="3"><?php echo $details['note'] ?></textarea>
            </div>
            <div class="form-group">
                <input class="form-control" type="submit">
            </div>
        </form>
    </div>
</div>
<?php
include('footer.php');
?>
