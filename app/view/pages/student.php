<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="">
    <title>Dashboard Admin</title>
</head>

<body>
    <!-- header -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex  justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="profil.php">Profil</a>
                    <a class="nav-link" href="contact.php">Contact</a>
                    <a class="nav-link" href="#">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <table class="table mt-5">
        <thead class="table-dark">
            <tr>
                <th scope="col">Full name</th>
                <th scope="col">Gender</th>
                <th scope="col">Class</th>
                <th scope="col">Prent</th>
                <th scope="col">Adress</th>
                <th scope="col">Birth</th>
                <th scope="col">Email</th>
                <th scope="col">Update/Delete</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <th>
                    <a href=""><button type="button" class="btn btn-warning">
                            Edit
                        </button></a>
                    <a href=""><button type="button" class="btn btn-danger">
                            Delete
                        </button></a>
                </th>
            </tr>
        </tbody>
    </table>





</body>

</html>