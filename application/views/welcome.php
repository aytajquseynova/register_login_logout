<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>User Signin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="signup-form col-md-6 offset-md-3">
            <h2 class="text-center">Welcome Back</h2>
            <form>
                <div class="form-group" style="font-size:20px; color:#000;" align="center">
                    Hello, <?php echo $firstname . " " . $lastname ?>
                </div>

                <div class="form-group">
                    <a href="<?php echo site_url('Logout'); ?>" class="btn btn-danger btn-block">Sign out</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>