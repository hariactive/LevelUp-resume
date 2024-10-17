<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark back-color shrink">
        <div class="container">
            <a class="navbar-brand" href="../../index.php">LevelUpResume</a>
            <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../resume.php">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../coverLetter.php">Cover Letter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../about.php">About</a>
                    </li>
                    <?php
                    if (isset($_SESSION['loggedin'])) {
                        echo '<li class="nav-item">
                        <a class="nav-link" href="../index.php"><i class="fas fa-user-circle"></i> ' . $_SESSION['username'] . '</a>
                    </li>';
                    }
                    // <li class="nav-item">
                    //     <a class="nav-link" href="index.php">User</a>
                    // </li>
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>