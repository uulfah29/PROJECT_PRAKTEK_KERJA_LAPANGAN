<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('p4/css/style.css')}}">

    <style>
        body {
            background-image: url("p4/images/umbjm.png");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <link rel="icon" href="{{asset('p4/images/logo UMBJM.png')}}">
</head>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Login</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <div class="login-wrap p-0">
                    <h6 class="body-section">Silahkan masukkan email dan password</h6>
                    <form action="{{ route ('proseslogin')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('p4/js/jquery.min.js')}}"></script>
<script src="{{asset('p4/js/popper.js')}}"></script>
<script src="{{asset('p4/js/bootstrap.min.js')}}"></script>
<script src="{{asset('p4/js/main.js')}}"></script>

</body>

</html>