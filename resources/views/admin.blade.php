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
                <h2>Dashboard</h2>
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
            <h3 class="main--title">Today's data</h3>
            <div class="card--wrapper">
                <div class="payment--card light-green">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Payment amount</span>
                            <span class="amount--value">$500.00</span>
                        </div>
                        <i class="fas fa-dollar-sign icon"></i>
                    </div>
                    <span class="card--detail">**** **** **** 1234</span>
                </div>

                <div class="payment--card light-purple">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Payment order</span>
                            <span class="amount--value">$200.00</span>
                        </div>
                        <i class="fas fa-list icon dark-purple"></i>
                    </div>
                    <span class="card--detail">**** **** **** 5678</span>
                </div>

                <div class="payment--card light-red">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Payment customer</span>
                            <span class="amount--value">$350.00</span>
                        </div>
                        <i class="fas fa-users icon dark-red"></i>
                    </div>
                    <span class="card--detail">**** **** **** 9101</span>
                </div>

                <div class="payment--card light-blue">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Payment proceed</span>
                            <span class="amount--value">$150.00</span>
                        </div>
                        <i class="fas fa-check icon dark-blue"></i>
                    </div>
                    <span class="card--detail">**** **** **** 1121</span>
                </div>
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