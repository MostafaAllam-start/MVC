<?php 
    require DASHBOARD_LAYOUT.'head.php';
?>
     <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update Category</h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form method="post" action="/MVC/category/updateHandler">
        <div class="card-body">
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $category['id']?>">
                <label for="exampleInputName">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter Name" value="<?= $category['name']?>">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
    <!-- /.card -->
<?php 
    require DASHBOARD_LAYOUT.'footer.php';
?>