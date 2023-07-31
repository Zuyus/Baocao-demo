 /*---------------------------
 Overview Progress charts
 ---------------------------*/
 var overviewProgressChartOptions = {
    series: [{
        name: 'Progress',
        data: [18, 22, 30, 42, 50, 58, 65]
    }],
    fill: {
        type: "gradient",
        gradient: {
            opacityFrom: 0,
            opacityTo: 0
        }
    },
    legend: {
        show: true,
        fontSize: '14px',
        fontWeight: 400,
        position: 'top',
        horizontalAlign: 'left', 
    },
    chart: {
        height: 350,
        type: 'area',
        toolbar: {
            show: false,
        },
    },
    grid: {
        show: true,
        borderColor: '#ECEDF0',
        strokeDashArray: 4,
        position: 'back',
        xaxis: {
            lines: {
                show: true
            }
        },   
        yaxis: {
            lines: {
                show: false
            }
        },  
        padding: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 10
        },  
    },
    colors: ['#BE63F9'],
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth',
        width: 3,
    },
    
    xaxis: {
        type: 'weak',
        categories: ["Weak 3", "Weak 4", "Weak 5", "Weak 6", "Weak 7", "Weak 8", "Weak 9"],
        labels: {
            style: {
                colors: ['#596680'],
                fontSize: '12px',
                fontWeight: 400,
            },
        },
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        tooltip: {
            enabled: false,
            style: {
                fontSize: '12px',
            },
        },
    },
    yaxis: {
        forceNiceScale: false,
        labels: {
            style: {
                colors: ['#596680'],
                fontSize: '12px',
                fontWeight: 400,
            },
            formatter: function (val) {
                return val + "%"
            }
        },
        axisBorder: {
            show: false,
        },
    },
    tooltip: {
        enabled: true,
        style: {
            fontSize: '12px',
            fontFamily: 'Inter, sans-serif',
        },
        x: {
            show: false,
        },
        marker: {
            show: false,
        },
    }
}

var overviewProgressChart = new ApexCharts(document.querySelector("#overview-progress-chart"), overviewProgressChartOptions);
overviewProgressChart.render();