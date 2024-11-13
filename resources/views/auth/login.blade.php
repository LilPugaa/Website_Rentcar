<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | All Stars Rentcar</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="container" id="container">
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
                <button type="submit" id="register">Sign In</button>
            </form>
        </div>


        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>All Stars Rentcar</h1>
                    <p>Don't Have An Account?</p>
                    <a href="{{ route('register') }}">
                        <button class="hidden" id="register">Sign Up</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>