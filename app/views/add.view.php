<?php require('partials/head.php'); ?>
<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                    <h2>Product Add</h2>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-danger">Add &raquo;</button>
                </div>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="input-group">
                    <label for="sku">SKU</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="sku" name="sku">
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="input-group">
                    <label for="name">NAME</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
            </div>
        </div>

    </div><!--/row-->
<?php require('partials/footer.php'); ?>
