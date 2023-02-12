<?php
    require _PUBLIC."layout/head.php";
?>
<div class="my-2 mr-2">
    <a class="btn btn-primary" style="float:right" href="add">Add Post</a>
    <div style="clear:both"></div>
</div>
<!-- /.col -->
<div class="col-md-12 mx-auto">
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Categories</h3>

        <!-- /.card-header -->
        <div class="card-body p-0">
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Progress</th>
                <th style="width: 40px">Label</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($categories as $category): ?>
            <tr>
                <td><?= $category['name']?></td>
                <td>
                    <a href="delete/<?=$category['id']?>" class="btn btn-danger">Delete</a>
                </td>
                <td>
                    <a href="update/<?=$category['id']?>" class="btn btn-warning">Update</a>
                </td>
            </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<?php
    require _PUBLIC."layout/footer.php";
?>

