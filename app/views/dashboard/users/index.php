<?php
    require DASHBOARD_LAYOUT."head.php";
?>
    <div class="my-2 mr-2">
        <a class="btn btn-primary" style="float:right" href="add">Add User</a>
        <div style="clear:both"></div>
    </div>

    <!-- /.col -->
    <div class="col-md-12 mx-auto">
        <div class="card">
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>User Role</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user):?>
                            <tr>
                                <td><?=$user['name']?></td>
                                <td><?=$user['email']?></td>
                                <td><?=substr(sha1($user['password']),0, 10)?>...</td>
                                <td><?=$user['role_name']?></td>
                                <td>
                                    <a href="delete/<?=$user['id']?>" class="btn btn-danger">Delete</a>
                                </td>
                                <td>
                                    <a href="update/<?=$user['id']?>" class="btn btn-warning">Update</a>
                                </td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
<?php
    require DASHBOARD_LAYOUT."footer.php"; 
?>