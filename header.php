<!-- Navbar  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <!-- Navbar-brand -->
    <a class="navbar-brand" href="index.php"> <img src="image/logo.svg" alt="logo"></a>
    <!-- menu toggler -->
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarid"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- navbar menu -->
    <div class="collapse navbar-collapse" id="navbarid">
        <ul class="navbar-nav ml-auto mr-5 mt-2 mt-lg-0">
            <li class="nav-item ">
                <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home </a>
            </li>
            <!-- Dropdown menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Products</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="index.php#technology">Technology</a>
                    <a class="dropdown-item" href="index.php#roman">Roman</a>
                    <a class="dropdown-item" href="index.php#physics">Physics</a>
                    <a class="dropdown-item" href="index.php#chemistry">Chemistry</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item ml-lg-3">
                <a class="nav-link btn btn-warning text-dark" href="contact.php"> <b>Contact</b> </a>
            </li>
        </ul>
        <!-- Search field in menu -->
        <!-- 
            <form class="form-inline mr-2">
                <div class="input-group ">
                    <input class="form-control shadow-none rounded" type="search" placeholder="Search">
                    <div class="input-group-prepend ml-2">
                        <button type="submit" class=" btn btn-warning shadow-none rounded "> <i class="fa fa-search"
                                aria-hidden="true"></i> </button>
                    </div>
                </div>
            </form>
           -->
    </div>
</nav>
<!-- navbar end -->