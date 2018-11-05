<html>
    <head>
        <link rel="stylesheet" href="<?= base_url('assets/admin/login.css') ?>">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body id="LoginForm">
        <div class="container">
            <div class="login-form">
                <div class="main-div">
                    <div class="panel">
                        <h2>Admin Login</h2>
                        <p>Silahkan masukkan alamat email dan password Anda</p>
                    </div>
                    <form action="post" id="Login">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Alamat Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
                <p class="botto-text">PT. DESNET</p>
            </div>
        </div>
    </body>
</html>