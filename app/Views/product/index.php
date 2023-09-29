<?= $this->include('layouts/bootstrap')?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <?php
                if(session()->getFlashdata('status')){
                    echo "<h4>".session()->getFlashdata('status')."</h4>";
                }
            ?>
            <div class="card">
                <div class="card-header">
                    <h4>Product Listing
                        <a href="<?= base_url('product-add') ?>" class = "btn btn-dark float-end">Add Product</a>
                    </h>
                </div>
                <div class="card-body">
                    <p><a href="<?= base_url('dropdown') ?>" class = "btn btn-dark">Product Categories</a></p>
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach($product as $pr) : ?>
                        <tr>
                            <td><?= $pr['id'] ?></td>
                            <td><?= $pr['ProductName'] ?></td>
                            <td><?= $pr['ProductDescription'] ?></td>
                            <td><?= $pr['ProductCategory'] ?></td>
                            <td><?= $pr['ProductQuantity'] ?></td>
                            <td><?= $pr['ProductPrice'] ?></td>
                            <td>
                                <a href="<?= base_url('product/edit/'.$pr['id'])?>" class = "btn btn-primary btn-sm">Edit</a>
                                <a href="<?= base_url('product/delete/'.$pr['id']) ?>" class = "btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>