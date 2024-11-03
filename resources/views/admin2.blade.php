<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin | Rentcar</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            {{-- <li class="logo-rentcar">
                <a href="{{ url('admin') }}">
                    <img src="{{ asset('images/logo-rentcar.jpg') }}" alt="RentCar">
                </a>
            </li> --}}
            <li class="active--dashboard">
                <a href="{{ url('admin') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="active--tables">
                <a href="{{ route('tables') }}">
                    <i class="fas fa-table"></i>
                    <span>Tables</span>
                </a>
            </li>
            <li class="active--charts">
                <a href="{{ route('charts') }}">
                    <i class="fas fa-chart-bar"></i>
                    <span>Charts</span>
                </a>
            </li>
            <li class="logout">
                <a href="#">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Rent Car</span>
                <h2>Dashboards</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Search">
                </div>
                <h6>Gung Yuga</h6>
                <img src="{{ asset('images/profil.jpg') }}" alt="bg">
            </div>
        </div>

        <div class="card--container">
            @yield('ganti')
        </div>
    </div>

    {{-- ApexCharts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.54.1/apexcharts.min.js"></script>
</body>
</html>