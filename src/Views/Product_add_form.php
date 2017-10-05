<?php
include('headers.php');
//var_dump($categories[0]['category']);

?>
<div class="container">
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4 text-center">
            <a href="/product/index"><div class=" home btn btn-info"> Home </div></a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <form action ='/product/add' method ='POST'>
                <div class="form-group">
                    <label for="title">Product title</label>
                    <input name="title" type="text" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label for="price">Product price</label>
                    <input name="price" type="text" class="form-control" id="price">
                </div>
                <div class="form-group">
                    <label for="quantity">Product quantity</label>
                    <input name="quantity" type="text" class="form-control" id="quantity">
                </div>
                <div class="form-group">
                    <label for="product_type">Select type of product</label>
                    <select name="id_category"  class="form-control" id="product_type">
                        <option value="" selected="selected"></option>
                        <?php
                        foreach($categories as $category) {
                            ?>
                            <option value =<?php echo $category['id']; ?>><?php echo $category['category']  ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="note">Note</label>
                    <textarea name="note" class="form-control" id="note" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <input class="form-control" type="submit">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>
