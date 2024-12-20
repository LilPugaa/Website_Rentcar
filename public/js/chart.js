// ------- Charts ------ //

// Bar Charts //
var barChartOptions = {
    series: [{
        data: [10, 8, 6, 4, 2],
        name: 'Products',
    }],
    chart: {
        type: 'bar',
        background: 'transparent',
        height: 350,
        toolbar: {
            show: false,
        },
    },
    colors: [
        '#2962ff',
        '#d50000',
        '#2e7d32',
        '#ff6d00',
        '#583cb3',
        '#021526',
    ],
    plotOptions: {
        bar: {
            distributed: true,
            borderRadius: 4,
            horizontal: false,
            columnWidth: '40%',
        }
    },
    dataLabels: {
        enabled: false,
    },
    fill: {
        opacity: 1,
    },
    grid: {
        borderColor: '#55596e',
        yaxis: {
            lines: {
                show: true,
            },
        },
        xaxis: {
            lines: {
                show: true,
            },
        },
    },
    legend: {
        labels: {
            colors: 'f5f7ff',
        },
        show: true,
        position: 'top',
    },
    stroke: {
        colors: ['transparent'],
        show: true,
        width: 2
    },
    tooltip: {
        shared: true,
        intersect: false,
        theme: 'dark',
    },
    xaxis: {
        categories: ['X5', 'Avanza', 'CR-V', 'Sigra', 'HR-V'],
        title: {
            style: {
                color: '#021526',
            },
        },
        axisBorder: {
            show: true,
            color: '#55596e',
        },
        axisTicks: {
            show: true,
            color: '#55596e',
        },
        labels: {
            style: {
                colors: 'f5f7ff',
            },
        },
    },
    yaxis: {
        title: {
            text: 'Count',
            style: {
                color: '#021526',
            },
        },
        axisBorder: {
            color: '#55596e',
            show: true,
        },
        axisTicks: {
            color: '#55596e',
            show: true,
        },
        labels: {
            style: {
                colors: 'f5f7ff',
            },
        },
    }
};

var barChart = new ApexCharts(document.querySelector("#bar-charts"), barChartOptions);
barChart.render();

// console.log("Chart.js Loaded");

// document.addEventListener('DOMContentLoaded', function () {
//     var barChart = new ApexCharts(document.querySelector("#bar-charts"), barChartOptions);
//     barChart.render();
// });

// Area Charts //
var areaChartOptions = {
    series: [{
        name: 'Purshase Orders',
        data: [31, 40, 28, 51, 42, 109, 100],
    }, {
        name: 'Sales Orders',
        data: [11, 32, 45, 32, 34, 52, 41],
    }],
    chart: {
        type: 'area',
        background: 'transparent',
        height: 350,
        stacked: false,
        toolbar: {
            show:false,
        },
    },
    colors: ['#00ab57', '#d50000'],
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
    dataLabels: {
        enabled: false,
    },
    fill: {
        gradient: {
            opacityFrom: 0.4,
            opacityTo: 0.1,
            shadeIntensity: 1,
            stops: [0, 100],
            type: 'vertical',
        },
        type: 'gradient',
    },
    grid: {
        borderColor: '#55596e',
        yaxis: {
            lines: {
                show: true,
            },
        },
        xaxis: {
            lines: {
                show: true,
            },
        },
    },
    legend: {
        labels: {
            colors: '#021526'
        },
        show: true,
        position: 'top',
    },
    markers: {
        size: 6,
        strokeColors: '#1b2635',
        strokeWidth: 3,
    },
    stroke: {
        curve: 'smooth'
    },
    xaxis: {
        axisBorder: {
            color: '#55596e',
            show: true,
        },
        axisTicks: {
            color: '#55596e',
            show: true,
        },
        labels: {
            offsetY: 5,
            style: {
                colors: '#021526',
            },
        },
    },
    yaxis:
    [
        {
            title: {
                text: 'Purchase Orders',
                style: {
                    color: '#021526',
                },
            },
            labels: {
                style: {
                    colors: ['#021526'],
                },
            },
        },
        {
            opposite: true,
            title: {
                text: 'Sales Orders',
                style: {
                    color: '#021526',
                },
            },
            labels: {
                style: {
                    colors: ['#021526'],
                },
            },
        },
    ],
    tooltip: {
        shared: true,
        intersect: false,
        theme: 'dark',
    }
};

var areaChart = new ApexCharts(document.querySelector("#area-charts"), areaChartOptions);
areaChart.render();

// document.addEventListener('DOMContentLoaded', function () {
//     var areaChart = new ApexCharts(document.querySelector("#area-charts"), barChartOptions);
//     barChart.render();
// });