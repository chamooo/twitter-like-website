
<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/admin/modules/users/create.php');
?>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="/admin/modules/users/create.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Username:</label>
                <input name="username" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="pwd" type="password" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Role</label>
                <input name="role"  type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="/admin/users.php" type="button" class="btn btn-primary">Back</a>
        </form>
    </div>
</div>