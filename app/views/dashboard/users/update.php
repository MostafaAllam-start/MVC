<?php
    require DASHBOARD_LAYOUT."head.php";
?>
        <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update <?=$title?></h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form method="post" action="/MVC/user/updateHandler">
        <div class="card-body">
            <div class="form-group">
                <input type="hidden" name="id" value="<?=$user['id']?>">
                <label for="exampleInputName">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter Name" value="<?=$user['name']?>">
                <label for="exampleInputEmail">Email</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail" placeholder="Enter Email" value="<?=$user['email']?>"> 
                <label for="exampleInputPassword">password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Enter Password" value="<?=$user['password']?>"> 
                <label for="exampleInputRole">Role</label>
                <select name="role_id" class="custom-select" id="exampleInputRole" value="<?=$user['role_id']?>">
                    <option value="<?=$user['role_id']?>"><?=$user['role_name']?></option>
                    <?php 
                        foreach($roles as $role):
                        if($user['role_id'] != $role['id']):
                    ?>
                        <option value="<?=$role['id']?>"><?=$role['name']?></option>
                    <?php endif;endforeach ?>
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