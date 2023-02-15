<?php
    require DASHBOARD_LAYOUT."head.php";
?>
        <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add <?=$title?></h3>
        </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form method="post" action="/MVC/user/addHandler">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter Name">
                <label for="exampleInputEmail">Email</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail" placeholder="Enter Email">
                <label for="exampleInputPassword">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Enter Password">
                <label for="exampleInputRole">Role</label>
                <select name="role_id" class="custom-select" id="exampleInputRole">
                    <?php foreach($roles as $role):?>
                        <option value="<?=$role['id']?>"><?=$role['name']?></option>
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