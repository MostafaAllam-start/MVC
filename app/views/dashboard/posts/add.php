<?php
    require DASHBOARD_LAYOUT."head.php";
?>
        <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add Category</h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form method="post" action="/MVC/post/addHandler" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputTitle">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputTitle" placeholder="Enter title">
                <label for="exampleInputDescription">Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputDescription" placeholder="Enter description">
                <label for="custom-file">Image</label>
                <div class="custom-file" id="custom-file">
                    <input type="file" name="img" class="custom-file-input" id="customFile" placeholder="Enter Image"
                        onchange="document.getElementById('img-lable').innerText = document.getElementById('customFile').value">
                    <label class="custom-file-label" id='img-lable' for="customFile">Choose Image</label>
                </div>
                <label for="exampleInputUser">User</label>
                <select name="user" class="custom-select" id="exampleInputUser">
                    <?php foreach($users as $user):?>
                        <option value="<?=$user['id']?>"><?=$user['name']?></option>
                        <?php endforeach ?>
                    </select>
                <label for="exampleInputCategory">Category</label>
                <select name="category" class="custom-select" id="exampleInputCategory">
                    <?php foreach($categories as $category):?>
                        <option value="<?=$category['id']?>"><?=$category['name']?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
    <!-- /.card -->
<?php
    require DASHBOARD_LAYOUT."footer.php";
?>