<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Register </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/responsive.css">
    <style>
        @keyframes blinkCursor {
            50% {
                border-right-color: transparent;
            }
        }

        @keyframes typeAndDelete {

            0%,
            10% {
                width: 0;
            }

            45%,
            55% {
                width: 17em;
            }

            /* adjust width based on content */
            90%,
            100% {
                width: 0;
            }
        }

        .terminal-loader {
            border: 0.1em solid #333;
            background-color: #1a1a1a;
            color: #0f0;
            font-family: "Courier New", Courier, monospace;
            font-size: 1em;
            padding: 1em 1em;
            width: 22em;
            margin: auto;
            box-shadow: 0 4px 8px rgba(10, 0, 0, 0.2);
            border-radius: 4px;
            position: relative;
            overflow: hidden;
            box-sizing: border-box;
        }

        .terminal-header {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4em;
            background-color: #333;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            padding: 0 0.4em;
            box-sizing: border-box;
        }

        .terminal-controls {
            float: right;
        }

        .control {
            display: inline-block;
            width: 0.6em;
            height: 0.6em;
            margin-left: 0.4em;
            border-radius: 50%;
            background-color: #777;
        }

        .terminal-title {
            float: left;
            line-height: 1.5em;
            color: #eee;
        }

        .text {
            display: inline-block;
            white-space: nowrap;
            overflow: hidden;
            padding-top: 25px;
            /* Cursor */

            border-right: 0.01em solid;
            /* Cursor */
            animation: typeAndDelete 6s steps(11) infinite,
                blinkCursor 0s step-end infinite alternate;
            margin-top: 1.5em;
        }

        .text1 {
            display: inline-block;
            white-space: nowrap;
            overflow: hidden;
            border-right: 0.01em solid;
            /* Cursor */
            animation: typeAndDelete 6s steps(12) infinite,
                blinkCursor 1s step-end infinite alternate;
            margin-top: 1.5em;
        }

        /* .container {
            margin: auto;
        } */
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<div class="container-fluid">
    <div class="card col-md-4 mt-4 offset-md-4">
        <div class="card-body">
           <div class="row">
        <!-- Login Form -->
            <div class="login" id="loginForm">
            <div class="terminal-loader">
                <div class="terminal-header">
                    <h4 class="text-center">Welcome Back To Login</h4>
                </div>
                <div class="text">
                    <label for="">Username</label>
                    <input type="text" placeholder="BongDorn">
                </div><br>
                <div class="text1">
                    <label for="">Password</label>
                    <input type="text" placeholder="123">
                </div>
            </div>
         <!-- end terminal -->
            <p class="text-center text-warning"><?php if (isset($_GET['warning'])) echo $_GET['warning']; ?></p>
            <div class="login-form">
                <form action="login.php" id="loginForm" method="post">
              
                    <div class="form-group">
                        <input required="required" type="text" name="username" autocomplete="off" class="input">
                        <span>Username</span>
                        <i></i>
                    </div>

                    <div class="form-group">
                        <input required="required" type="text" name="password" autocomplete="off" class="input">
                        <span>Password</span>
                        <i></i>
                    </div>

                    <div class="row ">
                        <div class="form-group form-check ">
                            <small class="show-form  " onclick="showForm()">No Account? Register Here.</small>
                        </div>
                        <button type="submit" class="btn btn-primary ">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Registration Area -->
        <div class="registration-container" id="registrationForm" style="display:none;">
            <h2 class="text-center">Register Your Account!</h2>
            <p class="text-center">Please enter your personal details.</p>
            <div id="liveAlertPlaceholder"></div>
            <div class="registration-form">
                <form  action="register.php" method="POST">
                    <div class="row">
                    <div class="form-group">
                        <input required="required" type="text" name="name" autocomplete="off" class="input">
                        <span>Full Name</span>
                        <i></i>
                    </div>
                    <div class="form-group ">
                        <input required="required" type="text" name="username" autocomplete="off" class="input">
                        <span>Username</span>
                        <i></i>
                    </div>
                   
                    <div class="form-group">
                        
                        <select class="form-control" id="role" name="role" autocomplete="off" >
                            <option>-Roles-Select-</option>
                            <option value="admin">Admin</option>
                            <option value="Theacher">Teacher</option>
                            <option value="student">Student</option>
                            <!-- <option value="student">Student</option> -->
                        </select>
                        <i></i>
                    </div>

                    <div class="form-group">
                        <input required="required" type="text" name="email" autocomplete="off" class="input">
                        <span>Email</span>
                        <i></i>
                    </div>
                    <div class="form-group">
                        <input required="required" type="text" name="password" autocomplete="off" class="input">
                        <span>Password</span>
                        <i></i>
                    </div>
                    <div class="form-group">
                        <input required="required" type="text" name="confirmpassword" autocomplete="off" class="input">
                        <span>Confirm Password</span>
                        <i></i>
                    </div>
                    <div class="row">
                    <div class="form-group float-right">
                        <small class="show-form" onclick="showForm()">Already have an account? Login Here.</small>
                    </div>
                    <button type="submit" class="btn btn-primary login-register form-control" id="liveAlertBtn">Register</button>
                    </div>
                    </div>
                </form>

            </div>
        </div>

        <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div> -->
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Copyright © 2024 <a href="">EDM</a> All rights reserved.</p>
            </div>
        </div>
    </div>

        </div>
    </div>
</div>
    </div>
</div>
    <script>
        function showForm() {
            const loginForm = document.getElementById('loginForm');
            const registrationForm = document.getElementById('registrationForm');

            if (registrationForm.style.display == 'none') {
                loginForm.style.display = 'none';
                registrationForm.style.display = '';
            } else {
                loginForm.style.display = '';
                registrationForm.style.display = 'none';
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>