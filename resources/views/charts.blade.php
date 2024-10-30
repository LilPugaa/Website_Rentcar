<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Charts Admin | Rentcar</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/charts.css') }}">
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active--dashboard">
                <a href="{{ url('admin') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="active--tables">
                <a href="{{ url('tables') }}">
                    <i class="fas fa-table"></i>
                    <span>Tables</span>
                </a>
            </li>
            <li class="active--charts">
                <a href="{{ url('charts') }}">
                    <i class="fas fa-chart-bar"></i>
                    <span>Charts</span>
                </a>
            </li>
            {{-- <li class="active--settings">
                <a href="{{ url('settings') }}">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li> --}}
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
                <h2>Charts</h2>
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

        <div class="table--wrapper">
            <h3 class="main--title">Charts Data</h3>
            <div class="table--container">
                <div class="charts">
                    <div class="charts-card">
                        <h2 class="chart-title">Top 5 Products</h2>
                        <div id="bar-charts"></div>
                    </div>

                    <div class="charts-card">
                        <h2 class="chart-title">Purchase and Sales Orders</h2>
                        <div id="area-charts"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ApexCharts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.54.1/apexcharts.min.js"></script>
    
    {{-- Page level custom scripts --}}
    <script src="{{ asset('js/chart.js') }}"></script>
</body>
</html>