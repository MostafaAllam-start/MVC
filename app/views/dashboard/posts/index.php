<?php
    require DASHBOARD_LAYOUT."head.php";
?>
<div class="my-2 mr-2">
    <a class="btn btn-primary" style="float:right" href="add">Add Post</a>
    <div style="clear:both"></div>
</div>
<!-- /.col -->
<div class="mx-auto">
    <div class="card">
        <div class="card-body p-0">
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>User</th>
                <th>Category</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($posts as $post): ?>
            <tr>
                <td><?= $post['title']?></td>
                <td><?= $post['description']?></td>
                <td><img src="<?= UPLOADED_FILES.$post['img']?>" style="width:50px; height:50px; border-radius: 5px;"/></td>
                <td><?= $post['user_name']?></td>
                <td><?= $post['category_name']?></td>
                <td>
                    <a href="delete/<?=$post['id']?>" class="btn btn-danger">Delete</a>
                </td>
                <td>
                    <a href="update/<?=$post['id']?>" class="btn btn-warning">Update</a>
                </td>
            </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<?php
    require DASHBOARD_LAYOUT."footer.php";
?>

