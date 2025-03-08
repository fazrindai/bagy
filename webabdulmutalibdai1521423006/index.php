<button?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome To Toko Barokah - Warung Fazrin</title>

    <!-- Custom fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,700" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #4e73df, #1cc88a);
        }
        .card {
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>

<body>
    <div class="card shadow-lg border-0">
        <div class="card-body p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Admin Login</h1>
            </div>
            <form method="post" action="login.php">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="InputUsername" name="txtusername" placeholder="usernama...">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="InputPassword" name="txtpassword" placeholder="password">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                <hr>
            </form>
            
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
