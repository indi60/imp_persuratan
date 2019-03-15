<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>



<div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                     {{ csrf_field() }}
                    <span class="login100-form-title p-b-49">
                     Register
                    </span>

                  

                        
                            <div class="wrap-input100 validate-input m-b-23" data-validate = "name">
                              <span class="label-input100" id="name" type="name"  name="name" value="{{ old('name') }}">Nama</span>
                                
                                     <input class="input100" type="text" name="name" placeholder="Nama">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                                @if ($errors->has('name'))
                                   <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                          <div class="wrap-input100 validate-input m-b-23" data-validate = "email">

                        <span class="label-input100" id="email" type="email"  name="email" value="{{ old('email') }}">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Masukan Email">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                        @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                            <div class="wrap-input100 validate-input m-b-23" data-validate = "password">
                              <span class="label-input100" id="password" type="password"  name="password" value="{{ old('password') }}">Password</span>
                                
                                     <input class="input100" type="password" name="password" placeholder=Password>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                                @if ($errors->has('password'))
                                   <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="wrap-input100 validate-input m-b-23" data-validate = "name">
                              <span class="label-input100" id="password-confirm" type="password"  name="password_confirmation" value="{{ old('password_confirmation') }}">Confirm Password</span>
                                
                                     <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                                @if ($errors->has('password_confirmation'))
                                   <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                       <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                           
                    </form>
                </div>


 <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>