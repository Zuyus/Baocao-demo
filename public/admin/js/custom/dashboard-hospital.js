  /*---------------------------
  Revenue charts
  ---------------------------*/
  var revenueChartWeekOptions = {
    series: [{
        name: 'Income',
        data: [360, 370, 400, 380, 330, 400, 450, 420, 1100, 1050, 1000]
    }, {
        name: 'Expense',
        data: [350, 400, 600, 450, 360, 400, 420, 380, 450, 430, 400]
    }],
    fill: {
        type: "gradient",
        gradient: {
            opacityFrom: 0.50,
            opacityTo: 0.10
        }
    },
    legend: {
        show: true,
        fontSize: '14px',
        fontWeight: 400,
    },
    chart: {
        height: 350,
        type: 'area',
        toolbar: {
            show: false,
        },
    },
    colors: ['#F96363', '#BE63F9'],
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth',
        width: 3,
    },
    tooltip: {
        enabled: false
    },
    xaxis: {
        type: 'month',
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov"],
        labels: {
            style: {
                cssClass: 'apexcharts-xaxis-label',
            },
        },
    },
    yaxis: {
        labels: {
            style: {
                cssClass: 'apexcharts-xaxis-label',
            },
        },
    }
}

var revenuechartWeek = new ApexCharts(document.querySelector("#revenue-chart-week"), revenueChartWeekOptions);
revenuechartWeek.render();

/*---------------------------
Revenue charts
---------------------------*/
var revenueChartMonthOptions = {
    series: [{
        name: 'Income',
        data: [360, 370, 400, 380, 330, 400, 450, 420, 1100, 1050, 1000]
    }, {
        name: 'Expense',
        data: [350, 400, 600, 450, 360, 400, 420, 380, 450, 430, 400]
    }],
    fill: {
        type: "gradient",
        gradient: {
            opacityFrom: 0.50,
            opacityTo: 0.10
        }
    },
    legend: {
        show: true,
        fontSize: '14px',
        fontWeight: 400,
    },
    chart: {
        height: 350,
        type: 'area',
        toolbar: {
            show: false,
        },
    },
    colors: ['#F96363', '#BE63F9'],
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth',
        width: 3,
    },
    tooltip: {
        enabled: false
    },
    xaxis: {
        type: 'month',
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov"],
        labels: {
            style: {
                cssClass: 'apexcharts-xaxis-label',
            },
        },
    },
    yaxis: {
        labels: {
            style: {
                cssClass: 'apexcharts-xaxis-label',
            },
        },
    }
}

var revenuechartMonth = new ApexCharts(document.querySelector("#revenue-chart-month"), revenueChartMonthOptions);
revenuechartMonth.render();

/*---------------------------
Revenue charts
---------------------------*/
var revenueChartOptions = {
    series: [{
        name: 'Income',
        data: [360, 370, 400, 380, 330, 400, 450, 420, 1100, 1050, 1000]
    }, {
        name: 'Expense',
        data: [350, 400, 600, 450, 360, 400, 420, 380, 450, 430, 400]
    }],
    fill: {
        type: "gradient",
        gradient: {
            opacityFrom: 0.50,
            opacityTo: 0.10
        }
    },
    legend: {
        show: true,
        fontSize: '14px',
        fontWeight: 400,
    },
    chart: {
        height: 350,
        type: 'area',
        fontFamily: 'Inter, sans-serif',
        toolbar: {
            show: false,
        },
    },
    colors: ['#F96363', '#BE63F9'],
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth',
        width: 3,
    },
    tooltip: {
        enabled: false
    },
    xaxis: {
        type: 'month',
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov"],
        labels: {
            style: {
                cssClass: 'apexcharts-xaxis-label',
            },
        },
    },
    yaxis: {
        labels: {
            style: {
                cssClass: 'apexcharts-xaxis-label',
            },
        },
    }
}

var revenuechart = new ApexCharts(document.querySelector("#revenue-chart"), revenueChartOptions);
revenuechart.render();

/*---------------------------
Patient statistics charts
---------------------------*/
var patientStatisticsOptions = {
    chart: {
        height: 270,
        type: 'radialBar',
    },
    series: [55, 65, 85],
    labels: ['In Treatment', 'Recovered', 'New'],
    colors: ['#BE63F9', '#4CBF4C', '#F96363'],
    legend: {
        show: false,
    },
    tooltip: {
        enabled: false
    },
    stroke: {
        lineCap: 'round'
    },
    plotOptions: {
        radialBar: {
            hollow: {
                margin: 5,
                size: '50px',
            },
            track: {
                background: '#F2F6F7',
            },
            dataLabels: {
                name: {
                    fontSize: '22px',
                },
                value: {
                    fontSize: '24px',
                    fontWeight: 600,
                    color: '#4D88FF',
                },
                total: {
                    show: true,
                    label: 'Total Patient',
                    color: '#596680',
                    fontSize: '16px',
                    fontWeight: 400,
                    formatter: function (w) {
                        return "250,560"
                    }
                }
            }
        }
    },
}

var patientStatisticsChart = new ApexCharts(document.querySelector("#patient-statistics-chart"), patientStatisticsOptions);
patientStatisticsChart.render();