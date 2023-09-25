<?= $this->include('layouts/bootstrap')?>

<?php
    $con = mysqli_connect("localhost", "root", "dbprod");
    $s = mysqli_query($con, "SELECT * from table_category");
?>
<select>
<?php
    while($r = mysqli_fetch_array($s)){
        ?>
        <option <?php echo $r['ProductCategory'] ?></option>
        <option </option>
<?php
    }
?>
</select>
    



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
                
                </div>
            </div>
        </div>
    </div>
</div>