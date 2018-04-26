<?php require('partials/head.php'); ?>
<div class="container">
    <div class="row">
        <form id="form-list" method="post" action="/product/delete">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Product List</h2>
                    </div>
                    <div class="col-md-3">
                            <select class="form-control top-20" name="action" id="action">
                                <option value="" selected="selcted">Select Action</option>
                                <option value="mass_delete">Mass Delete Action</option>
                            </select>
                    </div>
                    <div class="col-md-1">
                        <button type="button" id="btn-apply" class="btn btn-danger pull-right top-20">Apply</button>
                    </div>
                </div><!--/.row-->
                <hr>
            </div><!--/.col-md-12-->

            <div class="col-md-12">
                <div class="row">
                <?php foreach ($products as $product) : ?>
                    <div class="col-md-3">
                        <div class="product-block">
                            <div class="margin-top-20-negative">
                                <input type="checkbox" id="product[]" name="product[]" value="<?= $product->id ?>">
                            </div>
                            <p class="text-center"><?= $product->sku ?></p>
                            <p class="text-center"><strong><?= $product->name ?></strong></p>
                            <p class="text-center"><?= $product->price ?> $</p>
                            <p class="text-center"><?= ucfirst($product->type) ?>: <?= $product->value ?></p>
                        </div><!--/.product-block-->
                    </div><!--/.col-md-3-->
                <?php endforeach; ?>
                </div><!--/.row-->
            </div><!--/.col-md-12-->
        </form>
    </div><!--/row-->
</div><!--/.container-->
<?php require('partials/footer.php'); ?>
