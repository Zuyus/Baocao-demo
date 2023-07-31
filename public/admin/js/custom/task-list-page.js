var options = {
    series: [{
        name: 'Completed Tasks',
        data: [44, 55, 41, 67, 22, 43]
    }, {
        name: 'All Tasks',
        data: [13, 23, 20, 8, 13, 27]
    }],
    colors: ['#7879F1', '#E6EAF2'],
    chart: {
        type: 'bar',
        height: 350,
        stacked: true,
        toolbar: {
            show: false
        },
        zoom: {
            enabled: false
        }
    },
    responsive: [{
        breakpoint: 480,
        options: {
            legend: {
                position: 'bottom',
                offsetX: -10,
                offsetY: 0
            }
        }
    }],
    plotOptions: {
        bar: {
            horizontal: false,
            borderRadius: 20,
            columnWidth: '35px',
        },
    },
    grid: {
        borderColor: '#CFD2D9',
        strokeDashArray: 3,
    },
    dataLabels:{
        enabled: false,
    },
    xaxis: {
        type: 'week',
        categories: ['Week 1', 'Week-2', 'Week-3', 'Week-4', 'Week-5', 'Week-6'],
        axisTicks: {
            show: false
        },
        labels: {
            style: {
                fontFamily: 'Inter, sans-serif',
                cssClass: 'apexcharts-xaxis-label',
            },
        }
    },
    yaxis: {
        labels: {
            show: true,
            style: {
                fontFamily: 'Inter, sans-serif',
                cssClass: 'apexcharts-xaxis-label',
            },
        }
    },
    legend: {
        show: true,
        fontSize: '12px',
        fontFamily: 'Inter, sans-serif',
        fontWeight: 500,
        labels: {
            colors: ['#596680'],
        },
        markers: {
            width: 12,
            height: 12,
            radius: 12,
        },
    },
    fill: {
        opacity: 1
    },
    tooltip: {
        enabled: false,
    }
};

var chart = new ApexCharts(document.querySelector("#task-chart"), options);
chart.render();