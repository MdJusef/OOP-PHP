<!--nav -bar-->
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('index.php') ?>">Home</a>
                </li>


                <?php if(isset($_SESSION['authenticated'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><?= $_SESSION['auth_user']['user_name'] ?></a>
                    </li>


                    <li class="nav-item">
                        <form action="" method="POST">
                            <button type="submit" class="btn btn-success" name="logout_btn">Logout</button>
                        </form>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('login.php') ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url('register.php') ?>">Register</a>
                    </li>
                <?php endif ?>


            </ul>
        </div>
    </div>
</nav>
<!--nav end-->