<?php
if (!empty($_POST)) {
    $sql = "UPDATE user 
        SET username = '" . $_POST['username'] . "', email = '" . $_POST['email'] . "'
        WHERE id = '" . $_GET['id'] . "'";

    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success d-flex align-items-center" role="alert">
        <div>
            Data has been updated successfully
        </div>
        </div>
        <br>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
$sql = "SELECT * FROM user WHERE id = '" . $_GET['id'] . "'";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
?>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="?page=edit&id=<?= $_GET['id'] ?>" method="POST">
            <div class="mb-3">
                <label class="form-label">Username:</label>
                <input name="username" value="<?= $row['username'] ?>" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" value="<?= $row['email'] ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="/admin/users.php" type="button" class="btn btn-primary">Back</a>
        </form>
    </div>
</div>
