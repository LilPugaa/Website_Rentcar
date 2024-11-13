<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | All Stars Rentcar</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <div class="container" id="container">

      
        <div class="form-container sign-in">
            <form id="registerForm" action="{{ route('register.store') }}" method="POST">
            @csrf
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icons"><i class="bx bxl-google"></i></a>
                    <a href="#" class="icons"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="icons"><i class="bx bxl-github"></i></a>
                    <a href="#" class="icons"><i class="bx bxl-linkedin"></i></a>
                </div>
                <span>Register with E-mail</span>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                <div class="error" id="email-error"></div> <!-- Error message for email -->

                <!-- Name -->
                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
                <div class="error" id="name-error"></div> <!-- Error message for name -->

                <!-- Password -->
                <input type="password" name="password" placeholder="Password" required>
                <div class="error" id="password-error"></div> <!-- Error message for password -->

                <!-- Confirm Password -->
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                <div class="error" id="password_confirmation-error"></div> <!-- Error message for confirm password -->

                <button type="submit">Sign Up</button>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>All Stars Rentcar</h1>
                    <p>Already Have An Account?</p>
                    <a href="{{ route('login') }}">
                        <button class="hidden" id="login">Sign In</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="{{ asset('js/login.js') }}"></script> -->
</body>

</html>