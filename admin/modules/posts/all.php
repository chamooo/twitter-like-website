<div class="card shadow mb-4">
    <div class="card-header py-3 align-items-center d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Posts</h6>
        <a  class="btn btn-info float-right" href="?page=add">Add post</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>twit</th>
                        <th>user_id</th>
                        <th>date</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <?php
                $sql = "SELECT posts.id, twit, username, created 
                FROM posts
                JOIN user 
                ON posts.user_id = user.id";
                $result = mysqli_query($conn, $sql);
                while ($post = $result->fetch_assoc()) {
                ?>
                    <tbody>
                        <tr>
                            <td><?= $post['id'] ?></td>
                            <td><?= $post['twit'] ?></td>
                            <td><?= $post['username'] ?></td>
                            <td><?= $post['created'] ?></td>
                            <td style="width: 200px;">
                                <a href="?page=edit&id=<?=$post['id']?>" class="btn btn-info">
                                    <i class="fas fa-pen"></i>
                                    Edit
                                </a>
                                <a href="?page=delete&id=<?=$post['id']?>" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>