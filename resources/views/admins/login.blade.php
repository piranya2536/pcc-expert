<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <section class="login-block">
        <div class="container">
            <div class="row">
            <div class="col-md-9 banner-sec">
                    <!-- <img class="img-fluid" src="../assets/img/admin.jpg" alt="First slide"> -->
                </div>
                <div class="col-md-3 login-sec">
                    
                    <h2 class="text-center"> <img class="img-fluid" src="../assets/img/psu2.png" alt="First slide" ></h2>
                    <form class="login-form">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                            <input type="text" class="form-control" placeholder="">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                            <input type="password" class="form-control" placeholder="">
                        </div>


                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                <small>Remember Me</small>
                            </label>
                            <button type="submit" class="btn btn-login float-right">Submit</button>
                        </div>

                    </form>
                    <div class="copy-text">PSU Phuket
                        <i class="fa fa-heart"></i> 
                        <a href="http://grafreez.com">Expert Database System</a>
                    </div>
                </div>
              
            </div>
    </section>
</body>

</html>