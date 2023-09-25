<?= $this->include('layouts/bootstrap')?>

<?php
    $con = mysqli_connect("localhost", "root", "", "dbprod");
    $s = mysqli_query($con, "SELECT DISTINCT ProductCategory from dbprod.table_products");
?>

    



<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>Product Categories
                    <a href="<?= base_url('product') ?>" class = "btn btn-danger float-end">Back</a>
                    </h>
                </div>
                <div class="card-body">
                <select>
                    <?php
                        while($r = mysqli_fetch_array($s)){
                            ?>
                            <option><?php echo $r['ProductCategory'] ?></option>
                    <?php
                        }
                    ?>
                </select>
                </div>
            </div>
        </div>
    </div>
</div>