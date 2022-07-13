<?php 
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

  // COOKIE
  
  if(!empty($_POST)) {
    $sql = "SELECT * FROM user WHERE email = '" . $_POST['email'] . "' AND pwd = '" . $_POST['pwd'] . "'";
    $result = mysqli_query($conn, $sql);
    $user = $result->fetch_assoc();
    if($user) {
      if(isset($_POST['remember'])) {
        setcookie('user_id', $user['id'], time()+60*60*24*30, '/'); //назва кукі, значення кукі, скільки буде зберігатись кукі, шлях, з якого будуть доступні кукі
      } else {
        $_SESSION['user_id'] = $user['id'];
      }
      header('Location: ../index.php');
    } 
    else {
      $_COOKIE['user_id'] = null;
      $_SESSION['user_id'] = null;
      echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
      <div>
        Користувача не знайдено
      </div>
    </div>';
    }
  }
?>
 <!-- BODY START-->
 <div class="content">
      <div class="flex-div">
          <form method="POST" action="#" class="login-form">
          <h1>Log In</h1>
            <input name="email" type="text" placeholder="Email" required />
            <input name="pwd" type="password" placeholder="Password" required>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="remember" id="" value="1" checked>
                Remember me
              </label>
            </div>
            <button class="login">Log In</button>
            <!-- ЗРОБИТИ ЗАБУЛИ ПАРОЛЬ -->
            <a href="#">Forgot Password ?</a>
            <hr>
            <a href="register.php" class="create-account">Create New Account</a>
          </form>
      </div>
    </div>



 <!-- BODY END -->
  <?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php') ?>
