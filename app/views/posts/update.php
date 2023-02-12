<?php 
    require _PUBLIC.'layout/head.php';
?>
     <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update Category</h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form method="post" action="/MVC/post/updateHandler" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <input type="hidden" name="id" value="<?=$post['id']?>">
                <label for="exampleInputTitle">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputTitle" placeholder="Enter title" value="<?= $post['title']?>">
                <label for="exampleInputDescription">Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputDescription" placeholder="Enter description" value="<?= $post['description']?>">
                <label for="custom-file">Image</label>
                <div class="custom-file" id="custom-file">
                    <input type="file" name="img" class="custom-file-input" id="customFile" placeholder="Enter Image" value="<?= $post['img']?>" 
                        onchange="document.getElementById('img-lable').innerText = document.getElementById('customFile').value">
                    <label class="custom-file-label" for="customFile" id="img-lable"><?= $post['img']?></label>
                </div>
                <label for="exampleInputUser">User</label>
                <select name="user_id" class="custom-select" id="exampleInputUser">
                        <option value="<?= $post['user_id']?>"><?= $post['user_name']?></option>
                        <?php 
                        foreach($users as $user):
                        if($user['id'] != $post['user_id']):
                        ?>
                            <option value="<?=$user['id']?>"><?=$user['name']?></option>
                        
                        <?php endif; endforeach; ?>
                    </select>
                <label for="exampleInputCategory">Category</label>
                <select name="category_id" class="custom-select" id="exampleInputCategory">
                    <option value="<?= $post['category_id']?>"><?= $post['category_name']?></option>
                    <?php 
                        foreach($categories as $category):
                        if($post['category_id'] != $category['id']):
                    ?>
                        <option value="<?=$category['id']?>"><?=$category['name']?></option>
                    <?php endif; endforeach; ?>
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
    require _PUBLIC.'layout/footer.php';
?>