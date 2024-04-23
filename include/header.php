<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">School Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="service.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add-course.php">Add Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="course.php">Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <?php
            if (isset($_SESSION["is_login"]) && $_SESSION["is_login"] == "yes") {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a>
                </li>

                <?php
            } else {
                ?>

                <li class="nav-item">
                    <a class="nav-link" href="login.php">Log In / Sign Up</a>
                </li>

                <?php
            }
            ?>
        </ul>
    </div>
</nav>