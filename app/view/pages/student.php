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

    <!-- add button and form -->
    <button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#exampleModal"
        data-bs-whatever="@getbootstrap">Add Student</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New episode</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!------ form add episode ------>
                    <form action="<?php echo URLROOT; ?>/StudentController/insertStudent" method="post">
                        <div class="mb-3">

                            <label for="titre" name="titre" class="col-form-label">fullname:</label>
                            <input type="text" name="fullname" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="col-form-label">gender:</label>
                            <select class="form-control" name="gender">
                                <option>Male</option>
                                <option>Femal</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="contenu" class="col-form-label">class:</label>
                            <input class="form-control" name="class" id="message-text">
                        </div>
                        <div class="mb-3">
                            <label for="contenu" class="col-form-label">parent:</label>
                            <input class="form-control" name="parent" id="message-text">
                        </div>
                        <div class="mb-3">
                            <label for="contenu" class="col-form-label">adress:</label>
                            <input class="form-control" name="adress" id="message-text">
                        </div>
                        <div class="mb-3">
                            <label for="contenu" class="col-form-label">birth:</label>
                            <input class="form-control" name="birth" id="message-text" type="date">
                        </div>
                        <div class="mb-3">
                            <label for="contenu" class="col-form-label">email:</label>
                            <input class="form-control" name="email" id="message-text">
                        </div>
                        <button type="submit" value="submit" name="submit" style="margin-top: 20px;"
                            class="btn btn-outline-warning btn-rounded" data-mdb-ripple-color="dark">submit</button>


                </div>
            </div>
        </div>
    </div>
    </div>




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
        <?php foreach ($data as $row) : ?>
        <tbody>
            <tr>
                <th scope="row"><?php echo $row->fullname; ?></th>
                <td><?php echo $row->gender; ?></td>
                <td><?php echo $row->class; ?></td>
                <td><?php echo $row->parent; ?></td>
                <td><?php echo $row->adress; ?></td>
                <td><?php echo $row->birth; ?></td>
                <td><?php echo $row->email; ?></td>
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
        <?php endforeach; ?>
    </table>





</body>

</html>