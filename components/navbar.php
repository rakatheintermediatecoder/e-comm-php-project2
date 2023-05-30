<style>
    .nav-height-set {
        height: 70px;
    }

    @media (max-width: 1010px) {
        .nav-height-set {
            height: auto;
        }
    }

    .brand_img{
        border-radius: 30px;
    }
    
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-height-set">
    <a class="navbar-brand" href="index.php">
        <img src="./images/me-about.jpg" alt="ambika" class="brand_img" height="50" width="65" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="C:\xampp\htdocs\login-sinup_php\index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="C:\xampp\htdocs\login-sinup_php\dashboard\dashboard.php">Dashboard</a>
                
            <li class="nav-item">
                <a class="nav-link" href="">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./components/login.php">Log In || Sign Up</a>
            </li>
        </ul>

    </div>
</nav>