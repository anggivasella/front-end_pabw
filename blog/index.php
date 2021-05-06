<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link <?php if (isset($_GET['menu']) and $_GET['menu'] == 'home') {
                                            echo "active";
                                        } ?>" aria-current="page" href="home">Home</a>
                    <a class=" nav-link <?php if (isset($_GET['menu']) and $_GET['menu'] == 'blogs') {
                                            echo "active";
                                        } ?> " href="blogs">Blogs</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <?php
        if (!empty($_GET['menu'])) {
            switch ($_GET['menu']) {

                case 'home':
                    include "home.php";
                    break;

                case 'blogs':
                    include "blogs.php";
                    break;

                case 'kategori':
                    include "kategori.php";
                    break;

                default:
                    include "home.php";
                    break;
            }
        } else {
        ?>
            <script type="text/javascript">
                location.replace('/home');
            </script>
        <?php
        }
        ?>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="JS/script.js">
</script>

</html>