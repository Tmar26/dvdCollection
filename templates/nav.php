<nav class="navbar navbar-default navbar-static-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">DVD Library</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="dvds.php">DVD List</a></li>
                <li><a href="ps3.php">PS3 Game List</a></li>
              <?php if (isAuthenticated()) : ?>
                  <li><a href="add.php">Add DVD</a></li>
                  <li><a href="addPs3.php">Add PS3</a></li>
              <?php endif; ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <?php if (isAuthenticated()) : ?>
                  <li><a href="account.php">My Account</a></li>
                <?php if (isAdmin()) : ?>
                      <li><a href="admin.php">Admin</a></li>
                <?php endif; ?>
                  <li><a href="procedures/doLogout.php">Logout</a></li>
              <?php else : ?>
                  <li><a href="login.php">Login</a></li>
                  <li><a href="register.php">Register</a></li>
              <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>