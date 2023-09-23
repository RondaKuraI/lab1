<?= $this->include('layouts/bootstrap')?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card p-3">
                <div class="card-header">
                    <h4>Add Product
                        <a href="<?= base_url('product') ?>" class = "btn btn-danger float-end">Back</a>
                    </h>
                </div>
                <div class="card-body">
                    <form action="<?=base_url('product-store') ?>" method = "post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Name</label>
                                <input type="text" name = "ProductName" class="form-control" placeholder = "Product Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Description</label>
                                <input type="text" name = "ProductDescription" class="form-control" placeholder = "Product Description">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Category</label>
                                <input type="text" name = "ProductCategory" class="form-control" placeholder = "Product Category">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Quantity</label>
                                <input type="text" name = "ProductQuantity" class="form-control" placeholder = "Product Quantity">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label>Price</label>
                                <input type="text" name = "ProductPrice" class="form-control" placeholder = "Product Price">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <button type="submit" class = "btn btn-primary px-4">Save</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>