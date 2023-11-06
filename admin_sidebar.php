<header>
<nav class="navbar navbar-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <i class="fa-solid fa-bars"></i>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <i class="fa-solid fa-user-gear"></i>
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Administration</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="admin_panel.php">Home <i class="fa-solid fa-house"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="categories.php">Categories <i class="fa-solid fa-list"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="message_request.php">Message Feedback <i class="fa-solid fa-message"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_user_list.php">Admin List <i class="fa-solid fa-users-gear"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php" target="blank_">View User Side <i class="fa-solid fa-user"></i></a>
          </li>
          <form method="POST" action="admin_logout.php">
              <button name="admin_logout_btn" class="admin_logout_btn">Log out <i class="fa-solid fa-right-from-bracket"></i></button>
        </form>
        </ul>
      </div>
    </div>
  </div>
</nav>
</header>