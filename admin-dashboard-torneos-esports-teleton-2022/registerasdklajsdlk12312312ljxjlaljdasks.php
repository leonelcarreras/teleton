<!DOCTYPE html>
<html lang="en">

<head>

<?php require '.././database/conectionlogin.php';


$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }

?>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Teletón - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" style="background-image: url('../../assets/img/teleton/inicio/Teleton fondo.png')">

    <div class="container register-margin">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                    <?php 
                    if(!empty($message)): ?>

                    <p> <?= $message ?></p>

                    <?php endif; ?>


                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear Cuenta</h1>
                            </div>
                            <form class="user" action="registerasdklajsdlk12312312ljxjlaljdasks.php" method="POST">
                                
                                
                                <div class="form-group">
                                    
                                        <input class="form-control form-control-user" type="text" name="email" class="form-control" id="Email1" placeholder="Ingrese su email">
                                </div>
                                <div class="form-group">
                                    
                                    <input class="form-control form-control-user" type="password" name="password" class="form-control" id="Email1" placeholder="Ingrese su contraseña">

                                </div>
                                
                                
                                <button type="submit" value="Send" class="btn btn-primary btn-user btn-block">Entrar</button>

                                <hr>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>