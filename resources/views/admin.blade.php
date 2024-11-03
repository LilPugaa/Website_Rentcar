@extends('admin2')

@section('ganti')

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
    
@endsection