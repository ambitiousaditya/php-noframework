<?php require('partials/head.php'); ?>
<div class="container">
    <div class="row">
        <form id="form-add" method="post" action="/product/store">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Product Add</h2>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="btn-save" class="btn btn-danger pull-right top-20"> Save </button>
                    </div>
                </div><!--/.row-->
                <hr>
            </div><!--/.col-md-12-->
        
            <div class="col-md-6">
                <div class="form-group">
                    <label for="sku">SKU</label>
                    <input type="text" class="form-control" id="sku" name="sku" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">NAME</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="price">PRICE</label>
                    <input type="text" class="form-control" id="price" name="price" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="type_switch">TYPE SWITCHER</label>
                    <select class="form-control" name="type_switch" id="type_switch" required>
                        <option value="">Select Type</option>
                        <option value="size">Size</option>
                        <option value="weight">Weight</option>
                        <option value="dimension">Dimension</option>
                    </select>
                </div>
            </div>

            <div id="size-div">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="size">SIZE</label>
                        <input type="text" class="form-control" id="size" name="size">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div id="weight-div">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="weight">WEIGHT</label>
                        <input type="text" class="form-control" id="weight" name="weight">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            
            <div id="dimension-div">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="height">HEIGHT</label>
                        <input type="text" class="form-control" id="height" name="height">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="width">WIDTH</label>
                        <input type="text" class="form-control" id="width" name="width">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="length">LENGTH</label>
                        <input type="text" class="form-control" id="length" name="length">
                    </div>
                </div>
                <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </form>
    </div><!--/row-->
<?php require('partials/footer.php'); ?>
