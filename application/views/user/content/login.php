<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="asset/custom_css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="login container-fluid">
        <div class="row">

            <div class="col-12 col-md-7 text-center mt-5 left">
                <h1>Haloo Mahasiswa <span class="d-block">Fasilkom !</span></h1>
                <img src="asset/img/img-login.png" alt="image login">
            </div>

            <div class="col-12 col-md-4 p-5 my-5 right">
                <form>
                    <img src="asset/img/logo-horizontal.png" class="text-center" alt="">
                    <h3>Login</h3>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn-login py-2 px-5">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>