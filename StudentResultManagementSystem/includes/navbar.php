<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
        
        <?php if(isset($_SESSION['auth_user_id'])) : ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['user_fname'].' '.$_SESSION['user_lname']; ?>
          </a>
          <ul class="dropdown-menu" style="margin-left:-58px;" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="change_password.php">Change password</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
           </ul>
        </li>
        <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">SignUp</a>
        </li>
        <?php endif; ?>

      </ul>

    </div>
  </div>
</nav>