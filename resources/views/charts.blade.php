@extends('navigation')

@section('ganti')

<link rel="stylesheet" href="{{ asset('css/charts.css') }}">

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

    {{-- ApexCharts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.54.1/apexcharts.min.js"></script>
    
    {{-- Page level custom scripts --}}
    <script src="{{ asset('js/chart.js') }}"></script>

@endsection