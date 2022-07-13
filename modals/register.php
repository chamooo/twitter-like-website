<?php 
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

  if(!empty($_POST)) {
      $sql = "INSERT INTO user (username, email, pwd)
      VALUES ('" . $_POST['username'] . "', '" . $_POST['email'] . "', '" . $_POST['pwd'] . "')";

      if(mysqli_query($conn, $sql)) {
          echo "Added";
          header('Location: /index.php');
      }
      else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);
  }
?>
 <!-- BODY START-->
 <div class="content">
      <div class="flex-div">
      <form action="#" method="POST" class="register-form">
          <h1>Sign In</h1>
            <input name="username" type="text" placeholder="Your Name" required />
            <input name="email" type="text" placeholder="Email" required />
            <input name="pwd" type="password" placeholder="Password" required>
            <button type="submit" class="login">Sign In</button>
            <hr>
            <a href="login.php">Already have an account ?</a>
          </form>
      </div>
    </div>



 <!-- BODY END -->
  <?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php') ?>
