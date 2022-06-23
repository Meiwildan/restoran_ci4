<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap2/css/bootstrap.min.css')?>">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-5 mx-auto">

            <?php 
            if(!empty($info)) {
                echo '<div class="alert alert-danger" role="alert">';
                echo $info; 
                echo '</div>';
            }
            ?>
                <span>
                    <h1>LOGIN ADMIN</h1>
                </span>
                <hr>
                <form action="<?= base_url('/admin/login')?>" method="post">
        
                    <div class="form-group mt-5">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>   

                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="form-group mt-2">
                        <button class="btn btn-primary" style="width:100%" type="submit" name="login">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>