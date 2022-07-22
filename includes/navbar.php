<!-- Nav Bar -->
<section>
    <nav id="nav-bar" class="navbar fixed-top navbar-expand-lg navbar-dark nav-bar-bg">
        <div class="container">
            <a class="navbar-brand" href="index.php">Biography</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div id="nav-search-magrin">
                    <form class="d-flex" role="search">
                        <input class="form-control" id="nav-search" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <ul class="navbar-nav justify-content-end mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link current" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link current" href="aboutUs.php">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle current" href="prizes.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nobel prizes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Physics</a></li>
                            <li><a class="dropdown-item" href="#">Chemistry</a></li>
                            <li><a class="dropdown-item" href="#"> Physiology</a></li>
                            <li><a class="dropdown-item" href="#"> Medicine</a></li>
                            <li><a class="dropdown-item" href="#"> Economic</a></li>
                        </ul>
                    </li>
                    <?php
                    if (isset($_SESSION['auth'])) {
                    ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $_SESSION['auth_user']['name'] ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Some Action</a></li>
                                <li><a class="dropdown-item" href="#">Another Action</a></li>
                                <li><a class="dropdown-item" href="logout.php"> Logout</a></li>
                            </ul>
                        </li>
                    <?php
                    }else{
                        ?>
                        <li>
                            <a class="nav-link current" href="login.php">Login</a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</section>