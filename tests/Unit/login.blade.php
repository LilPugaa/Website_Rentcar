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

        <!-- Register Form -->
        <div class="form-container sign-up">
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <h1>Create Account</h1>

                <!-- Email -->
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror

                <!-- Name -->
                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror

                <!-- Password -->
                <input type="password" name="password" placeholder="Password" required>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror

                <!-- Confirm Password -->
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                @error('password_confirmation')
                    <div class="error">{{ $message }}</div>
                @enderror

                <button type="submit" id="login">Sign Up</button>
            </form>
        </div>

        <!-- Login Form -->
        <div class="form-container sign-in">
            <form action="{{ route('login.submit') }}" method="POST"> <!-- Mengubah action ke login.submit -->
                @csrf
                <h1>Sign In</h1>
                @if ($errors->any())
                    <div class="error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Email -->
                <input type="email" name="email" placeholder="Enter Email" value="{{ old('email') }}" required>
                
                <!-- Password -->
                <input type="password" name="password" placeholder="Enter Password" required>

                <a href="#">Forgot Password?</a>
                <button type="submit">Sign In</button>
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
