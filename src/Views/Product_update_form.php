<?php
include('headers.php');
?>
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
        <form action ='<?php echo '/product/update/'.$details['id']?>' method ='POST'>
            <div class="form-group">
                <label for="title">Product title</label>
                <input name="updated_title" value='<?php echo $details['title']?>' name="title" type="text" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="price">Product price</label>
                <input name="updated_price" value='<?php echo $details['price']?>' name="price" type="text" class="form-control" id="price">
            </div>
            <div class="form-group">
                <label for="quantity">Product quantity</label>
                <input name="updated_quantity" value='<?php echo $details['quantity']?>' name="quantity" type="text" class="form-control" id="quantity">
            </div>
            <div class="form-group">
                <label for="product_type">Select type of product</label>
                <select name="updated_category"  class="form-control" id="product_type">
                    <?php
                    foreach($categories as $category) {
                        echo"<option value=". $category['id']." ". ($details['id_category'] == $category['id'] ? "selected='selected'" : "" ).">". $category['category']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <textarea value='' name="updated_note" class="form-control" id="note" rows="3"><?php echo $details['note'] ?></textarea>
            </div>
            <div class="form-group">
                <input name ='submit' class="form-control" type="submit">
            </div>
        </form>
    </div>
</div>
<?php
include('footer.php');
?>
