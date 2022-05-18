<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
          <li>
          <form action="../logout.php" method="post">
              <button type = "submit" class="dropdown-item" name = "logout_btn">Logout</button>
          </form>
      
          </li>
          </ul>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>