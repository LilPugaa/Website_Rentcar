<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login & Register</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icons"><i class="bx bxl-google"></i></a>
                    <a href="#" class="icons"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="icons"><i class="bx bxl-github"></i></a>
                    <a href="#" class="icons"><i class="bx bxl-linkedin"></i></a>
                </div>
                <span>Register with E-mail</span>
                <input type="email" placeholder="E-mail">
                <input type="text" placeholder="Enter Username">
                <input type="password" placeholder="Enter Password">
                <button>Sign Up</button>
            </form>
        </div>

        <div class="form-container sign-in">
            <form>
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icons"><i class="bx bxl-google"></i></a>
                    <a href="#" class="icons"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="icons"><i class="bx bxl-github"></i></a>
                    <a href="#" class="icons"><i class="bx bxl-linkedin"></i></a>
                </div>
                <span>Login with Username & Password</span>
                <input type="text" placeholder="Enter Username">
                <input type="password" placeholder="Enter Password">
                <a href="#">Forgot Password?</a>
                <button>Sign In</button>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome To <br>All Stars Rentcar</h1>
                    <p>Sign In with Username & Password</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>All Stars Rentcar</h1>
                    <p>Sign Up with E-mail & Password</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

        {{-- Page level custom scripts --}}
        <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>